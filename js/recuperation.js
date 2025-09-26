document.querySelector('#formRecuperation').addEventListener('submit', async (e) => {
        e.preventDefault();

        const email = document.querySelector('#email').value.trim();
        const sendBtn = document.querySelector('#sendBtn');

        sendBtn.disabled = true;
        sendBtn.textContent = 'Envoi en cours...';

        try {
                const response = await fetch('../scripts/recuperation.php', {
                        method: 'POST',
                        headers: {
                                'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ email })
                });

                if (!response.ok) {
                        throw new Error(`Erreur réseau : ${response.status} ${response.statusText}`);
                }

                const result = await response.json();

                if (result.success) {
                        document.querySelector('#formRecuperation').reset();
                        showAlertRecuperation('Lien de réinitialisation envoyé avec succès ', true);

                        // Option : soit on redirige directement
                        setTimeout(() => {
                                window.location.href = "../connexion";
                        }, 2000);
                } else {
                        showAlertRecuperation(result.message, false);
                }
        } catch (err) {
                console.error(err);
                showAlertRecuperation("Une erreur est survenue. Veuillez réessayer.", false);
        } finally {
                // Réactiver le bouton après la requête
                sendBtn.disabled = false;
                sendBtn.textContent = 'Envoyer';
        }
});

const showAlertRecuperation = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#msg');
        if (!err_msg) return;
        const alert = document.createElement('div');
        alert.className = `alert-message p-2 w-100 px-8 mx-auto mb-4 rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
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