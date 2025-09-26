const supprimer_recruteur = document.querySelectorAll('.supprimer_recruteur');
supprimer_recruteur.forEach(btn => {
        btn.addEventListener('click', async () => {
                const recruteurId = btn.dataset.recruteur;
                const data = { recruteurId };
                try {
                        const response = await fetch('../scripts/supprimer_recruteur.php', {
                                method: 'POST',
                                body: JSON.stringify(data)
                        });
                        if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                        const result = await response.json();
                        if (result.success) {
                                showAlert_supprimer(result.message, true);
                                const offreElement = btn.closest('tr');
                                if (offreElement) {
                                        offreElement.remove();
                                }
                        }
                        else {
                                showAlert_supprimer(result.message, false)
                        }
                }
                catch (error) {
                        showAlert_supprimer(error.message, true)
                }
        });
})


const supprimer_candidat = document.querySelectorAll('.supprimer_candidat');
supprimer_candidat.forEach(btn => {
        btn.addEventListener('click', async () => {
                const candidatId = btn.dataset.candidat;
                const data = { candidatId };

                try {
                        const response = await fetch('../scripts/supprimer_candidat.php', {
                                method: 'POST',
                                body: JSON.stringify(data)
                        });
                        if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                        const result = await response.json();
                        if (result.success) {
                                showAlert_supprimer_c(result.message, true);
                                const offreElement = btn.closest('tr');
                                if (offreElement) {
                                        offreElement.remove();
                                }
                        }
                        else {
                                showAlert_supprimer_c(result.message, false)
                        }
                }
                catch (error) {
                        showAlert_supprimer_c(error.message, true)
                }
        });
})

const showAlert_supprimer = (message, isSuccess = true) => {
        const err_msg = document.querySelector('.err_msg_suppression_offre');
        if (!err_msg) return;
        const alert = document.createElement('div');
        alert.className = `alert-message "p-4 w-70 h-8 flex justify-center items-center mx-auto mb-4 rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
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
        }, isSuccess ? 1000 : 1500);
};

const showAlert_supprimer_c = (message, isSuccess = true) => {
        const err_msg = document.querySelector('.err_msg_suppression_c');
        if (!err_msg) return;
        const alert = document.createElement('div');
        alert.className = `alert-message "p-4 w-70 h-8 flex justify-center items-center mx-auto mb-4 rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
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
        }, isSuccess ? 1000 : 1500);
};

