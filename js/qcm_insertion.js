const formQCM = document.querySelector('#formQCM');
const dynamic_creat = document.querySelector('#dynamic_create');


formQCM.addEventListener('submit', async (e) => {
        e.preventDefault();
                const titre = document.querySelector(".titres").value.trim();
        let data = [];

        document.querySelectorAll("[data-question-id]").forEach(questionDiv => {
                let questionId = questionDiv.dataset.questionId;
                let questionText = questionDiv.querySelector("[data-role='question-text']").value;
                let questionType = questionDiv.querySelector("[data-role='question-type']").value;

                let answers = [];
                questionDiv.querySelectorAll("[data-role='answer']").forEach(ansDiv => {
                        let ansText = ansDiv.querySelector("[data-role='answer-text']").value;
                        let inputEl = ansDiv.querySelector("input[type='checkbox'], input[type='radio']");

                        answers.push({
                                text: ansText,
                                isCorrect: inputEl.checked
                        });
                });

                data.push({
                        id: questionId,
                        titre:titre,
                        text: questionText,
                        type: questionType,
                        answers: answers
                });
        });
        

        try {
                // Récupère les paramètres de l'URL
                const params = new URLSearchParams(window.location.search);
                const offre_id = params.get('offre_id');

                const response = await fetch(`/skillguard/scripts/qcm_insertion.php?offre_id=${offre_id}`, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data) 
                });

                if (!response.ok) {
                        throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                }

                const result = await response.json();
                if (result.success) {
                        showAlert(result.message, true);
                        formQCM.reset();
                        dynamic_creat.innerHTML = "";
                        window.location.href = '../'
                } else {
                        showAlert(result.message, false);
                }
        }
        catch (err) {
                showAlert("Une erreur est survenue. Veuillez réessayer", false);
        }
});



const showAlert = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg');
        if (!err_msg) return;
        const alert = document.createElement('div');
        alert.className = `alert-message p-2 w-full mx-auto mb-4 rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
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
        }, isSuccess ? 500 : 1500);
};



