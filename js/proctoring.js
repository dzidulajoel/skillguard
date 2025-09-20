// ==================== Variables globales ====================
const timer = document.getElementById('timer');
const credibilite = document.getElementById('credibilite');
const score_credibilite = 100;
let currentCredibilite = score_credibilite;
const AUTO_SUSPEND_THRESHOLD = 40;
let testSuspended = false;
let stream = null;
let timerInterval = null;
let logArray = [];
const btnSubmitQcm = document.querySelector('#button_submit_test_qcm');
const logs = {
        face: [],
        multipleFaces: [],
        noFace: [],
        eyes: [],
        gaze: [],
        audio: [],
        keywords: [],
        blur: [],
        devTools: [],
        shortcuts: []
};

let duration = 30 * 60; // 30 min
const localVideo = document.getElementById('localVideo');

let flags = {
        blur: false,
        devTools: false,
        cameraStopped: false
};

// Seuils centralisés
const thresholds = {
        blur: 300,          // 6s cumulés → quitter l’onglet quelques secondes suffit
        eyes: 80,           // 16s cumulés → yeux fermés un peu trop longtemps
        face: 80,           // 4s cumulés → absence rapide de visage
        noFace: 10,         // 2s cumulés → absence prolongée quasi immédiate
        multipleFaces: 5,   // 1s cumulés → plusieurs visages tolérés un instant seulement
        gaze: 1000,          // 20s cumulés → regarder ailleurs trop longtemps
        audio: 24,           // 1,5s cumulés → conversation détectée rapidement
        keywords: 50,        // instantané → un seul mot suspect = sanction
        devTools: 1,        // instantané → ouverture = sanction directe
        shortcuts: 1        // instantané → raccourci interdit = sanction directe
};

const penalties = {
        blur: 2,           // quitter l’onglet ≈ -2%
        eyes: 2,           // yeux fermés trop longtemps ≈ -3%
        face: 0,           // problème de détection de visage ≈ -5%
        noFace: 5,         // absence de visage ≈ -5%
        multipleFaces: 10, // plusieurs visages = grave ≈ -10%
        gaze: 1,           // regard hors cadre ≈ -2%
        audio: 3,          // bruit suspect / parole ≈ -3%
        keywords: 0,       // mot suspect (ex. "réponse", "aide") ≈ -8%
        devTools: 20,      // DevTools ouvert = triche presque certaine ≈ -20%
        shortcuts: 10      // Ctrl+C / Ctrl+U / F12 = tentative claire ≈ -10%
};

credibilite.textContent = score_credibilite + "%";
// ==================== Démarrage du test ====================
setTimeout(() => {
        startCamera();
        startAudioDetection();

}, 1000);

// ==================== Fonction caméra ====================
async function startCamera() {
        try {
                // Accès caméra
                stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
                localVideo.srcObject = stream;
                showAlertTestQcm('Le test a commencé', true);
                document.querySelector('#form_qcm_candidat_reponse').classList.remove('hidden')
                setTimeout(() => {
                        startTimer();
                }, 1000);

                // Chargement des modèles IA
                const faceModel = await blazeface.load();
                const meshModel = await facemesh.load();

                let eyesClosedFrames = 0;
                const EYES_CLOSED_THRESHOLD = 15;

                // Analyse vidéo en continu
                setInterval(async () => {
                        const faces = await faceModel.estimateFaces(localVideo, false);

                        if (faces.length === 1) {
                                //addLog('face', 'Visage détecté');
                                const predictions = await meshModel.estimateFaces(localVideo);

                                if (predictions.length > 0) {
                                        const keypoints = predictions[0].scaledMesh;

                                        // Détection des yeux fermés
                                        const leftEyeTop = keypoints[159];
                                        const leftEyeBottom = keypoints[145];
                                        const rightEyeTop = keypoints[386];
                                        const rightEyeBottom = keypoints[374];

                                        const leftEyeHeight = Math.hypot(leftEyeTop[0] - leftEyeBottom[0], leftEyeTop[1] - leftEyeBottom[1]);
                                        const rightEyeHeight = Math.hypot(rightEyeTop[0] - rightEyeBottom[0], rightEyeTop[1] - rightEyeBottom[1]);
                                        const avgEyeHeight = (leftEyeHeight + rightEyeHeight) / 2;

                                        if (avgEyeHeight < 5) {
                                                eyesClosedFrames++;
                                                if (eyesClosedFrames > EYES_CLOSED_THRESHOLD) {
                                                        addLog('eyes', 'Yeux fermés prolongés');
                                                }
                                        } else {
                                                eyesClosedFrames = 0;
                                        }

                                        // Détection regard hors cadre
                                        const noseTip = keypoints[1];
                                        if (noseTip[0] < 100 || noseTip[0] > 300) {
                                                addLog('gaze', 'Regard hors cadre');
                                        }
                                }
                        } else if (faces.length > 1) {
                                addLog('multipleFaces', 'Plusieurs visages détectés');
                        } else {
                                addLog('noFace', 'Aucun visage détecté');
                        }
                }, 200);

        } catch (err) {
                showAlertTestQcm("Erreur : Veuillez activer votre caméra", false);
        }
}

// ==================== Détection Audio ====================
async function startAudioDetection() {
        try {
                const stream = await navigator.mediaDevices.getUserMedia({ audio: true });

                const recognizer = speechCommands.create("BROWSER_FFT");
                await recognizer.ensureModelLoaded();

                recognizer.listen(result => {
                        const scores = result.scores;
                        const words = recognizer.wordLabels();

                        let detectedWord = null;
                        for (let i = 0; i < scores.length; i++) {
                                if (scores[i] > 0.75) {
                                        detectedWord = words[i];
                                        break;
                                }
                        }

                        if (detectedWord) {
                                addLog('keywords', `Mot suspect détecté : ${detectedWord}`);
                        }

                }, { probabilityThreshold: 0.75 });

                return recognizer;

        } catch (err) {
                showAlertTestQcm("Veuillez activer votre micro", false);
        }
}

// ==================== Détection DevTools ====================
setInterval(() => {
        const devToolsOpen = window.outerWidth - window.innerWidth > 160 ||
                window.outerHeight - window.innerHeight > 160;
        if (devToolsOpen && !flags.devTools) {
                flags.devTools = true;
                addLog('devTools', 'DevTools ouvert');
        }
}, 1000);

// ==================== Événements fenêtre ====================
document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
                addLog('blur', 'Onglet quitté');
        } else {
                addLog('blur', 'Retour sur l’onglet');
        }
});

// ==================== Détection raccourcis ====================
document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && ['c', 'v', 'a', 'u'].includes(e.key)) {
                addLog('shortcuts', `Raccourci interdit : Ctrl+${e.key}`);
                e.preventDefault();
        }
        if (e.key === 'F12') {
                addLog('shortcuts', 'Raccourci interdit : F12');
                e.preventDefault();
        }
});

// ==================== Alertes UI ====================
const showAlertTestQcm = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg');
        if (!err_msg) return;

        const alert = document.createElement('div');
        alert.className = `alert-message p-2 w-160 mx-auto mb-4 rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
        alert.textContent = message;
        alert.style.opacity = '0';
        alert.style.transition = 'opacity 0.5s ease';
        err_msg.prepend(alert);

        requestAnimationFrame(() => {
                alert.style.opacity = '1';
        });

        setTimeout(() => {
                alert.style.opacity = '0';
                setTimeout(() => {
                        alert.remove();
                }, 500);
        }, isSuccess ? 2000 : 3000);
};

// ==================== Timer ====================
function startTimer() {
        timerInterval = setInterval(() => {
                if (duration <= 0) {
                        clearInterval(timerInterval);
                        return;
                }
                duration--;
                const minutes = Math.floor(duration / 60);
                const seconds = duration % 60;
                timer.textContent = `${minutes}:${seconds.toString().padStart(2, "0")}`;

                if (duration === 900) timer.classList.add('text-orange-500');
                if (duration === 300) timer.classList.add('text-red-500');

        }, 1000);
}

// ==================== Gestion des logs ====================
function addLog(category, message) {
        if (!logs[category]) return;

        const logEntry = {
                category,
                message,

        };

        // On garde aussi un historique par catégorie
        logs[category].push(logEntry);

        // On garde l’ensemble dans logArray (log global)
        logArray.push(logEntry);

        // Décrément crédibilité si seuil atteint
        if (logs[category].length % thresholds[category] === 0) {
                // console.log(`${category}: seuil atteint (${logs[category].length})`);
                decrementCredibility(penalties[category], category);
        }
}
//console.log(logs);

function decrementCredibility(amount, reasonCategory = '') {
        if (testSuspended) return; // déjà suspendu

        currentCredibilite = Math.max(0, currentCredibilite - amount);
        credibilite.textContent = currentCredibilite + "%";

        // changer style selon niveau
        if (currentCredibilite <= 70 && currentCredibilite > 40) {
                credibilite.classList.remove('text-red-600');
                credibilite.classList.add('text-orange-500');
        } else if (currentCredibilite <= 40) {
                credibilite.classList.remove('text-orange-500');
                credibilite.classList.add('text-red-600', 'font-bold');
        }

        // Log local console
        //console.log(`Crédibilité: ${currentCredibilite}% ( -${amount} via ${reasonCategory} )`);

        // Auto-suspension si seuil franchi
        if (currentCredibilite <= AUTO_SUSPEND_THRESHOLD) {
                suspendTest(reasonCategory);
        }
}

async function suspendTest(reason = 'credibility_threshold') {
        if (testSuspended) return;
        testSuspended = true;

        // 1) Stopper le timer
        if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
        }

        try {
                if (stream) {
                        stream.getTracks().forEach(track => {
                                try { track.stop(); } catch (e) { console.warn(e); }
                        });
                        localVideo.srcObject = null;
                        stream = null;
                }
        } catch (e) {
                console.warn('Erreur en stoppant le stream :', e);
        }

        // 3) Arrêter d'autres services (ex: speech recognizer if stored)
        try {
                if (typeof recognizer !== 'undefined' && recognizer) {
                        recognizer.stopListening();
                }
        } catch (e) { /* ignore */ }

        try {
                // Remplace l'URL par ton endpoint serveur qui loggue la suspension
                await fetch('../../../scripts/log_suspension.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        credentials: 'same-origin',
                        body: JSON.stringify({
                                reason,
                                credibility: logArray,
                                timestamp: Date.now(),
                        })
                });
        } catch (err) {
                console.warn('Impossible d\'envoyer la suspension au serveur :', err);
        }

        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        const testId = params.get("id");


        try {
                const response = await fetch('../../../scripts/envoie_de_log.php', {
                        method: 'POST',
                        headers: {
                                'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                                test_id: testId,
                                logs: logs,
                                score: currentCredibilite
                        })
                });

                if (!response.ok) {
                        throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                }
                const result = await response.json();
                if (result.success) {

                }
                else {
                        showAlertTestQcm(result.message, false);
                }

        } catch (err) {
                showAlertTestQcm(err.message, false);
        }

        // 6) Afficher un message local (optionnel) puis rediriger
        showAlertTestQcm('Test suspendu automatiquement pour cause de faible crédibilité.', false);

        setTimeout(() => {
                const redirectUrl = `/skillguard/candidat/passer_le_test/QCM/auto_suppension_du_test`;
                window.location.href = redirectUrl;
        }, 2000);
}


btnSubmitQcm.addEventListener('click', async () => {

        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        const testId = params.get("id");


        try {
                const response = await fetch('../../../scripts/envoie_de_log.php', {
                        method: 'POST',
                        headers: {
                                'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                                test_id: testId,
                                logs: logs,
                                score: currentCredibilite
                        })
                });

                if (!response.ok) {
                        throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                }
                const result = await response.json();

                if (result.success) {
                        showAlertTestQcm('Test soumis avec succes', true);
                        document.querySelector('#cred_score').textContent = result.score;

                        if (result.score < 50) {
                                document.querySelector('#close_circle').classList.remove('hidden');
                                document.querySelector('.credible_text').classList.remove('text-slate-500');
                                document.querySelector('.credible_text').classList.add('text-red-500');
                        }
                        else {
                                document.querySelector('#check_circle').classList.remove('hidden');
                                document.querySelector('.credible_text').classList.remove('text-slate-500');
                                document.querySelector('.credible_text').classList.add('text-green-500');
                        }

                        if (testSuspended) return;
                        testSuspended = true;
                        if (timerInterval) {
                                clearInterval(timerInterval);
                                timerInterval = null;
                        }

                        setTimeout(() => {
                                document.querySelector('#form_qcm_candidat_reponse').classList.add('hidden')
                                document.querySelector('#header_qcm').classList.add('hidden')
                                document.querySelector('#menu').classList.add('hidden')
                                document.querySelector('#end_qcm_info').classList.remove('hidden')
                        }, 3000)
                }
                else {
                        showAlertTestQcm(result.message, false);
                }

        } catch (err) {
                showAlertTestQcm(err.message, false);
        }

})

