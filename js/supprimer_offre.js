const deleteBtns = document.querySelectorAll('.delete_offre');
deleteBtns.forEach(btn => {
        btn.addEventListener('click', async () => {
                const offreId = btn.dataset.offre;
                const data = { offreId };
                try {
                        const response = await fetch('../scripts/supprimer_offre.php', {
                                method: 'POST',
                                body: JSON.stringify(data)
                        });

                        if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                        const result = await response.json();
                        if (result.success) {
                                showAlerts(result.message, true);
                                const offreElement = btn.closest('tr');
                                if (offreElement) {
                                        offreElement.remove();
                                }
                        }
                        else {
                                showAlerts(result.message, false)
                        }
                }
                catch (error) {
                        showAlerts(error.message, true)
                }
        });
})


const showAlerts = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg_suppression_offre');
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


