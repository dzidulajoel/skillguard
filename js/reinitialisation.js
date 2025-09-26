document.querySelector('#formRecuperation').addEventListener('submit', async (e) => {
        e.preventDefault();

        const pwd = document.querySelector('#pwd').value.trim();
        const pwd_conf = document.querySelector('#pwd_conf').value.trim();
        const sendBtn = document.querySelector('#sendBtn');
        const token = sendBtn.dataset.token;
        sendBtn.textContent = 'Envoi en cours...';
        const data = {pwd, pwd_conf, token}

        if (!verifierMotDePasse(data.pwd)) {
                showAlertRecuperation("Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&).", false);
        } else if (data.pwd !== data.pwd_conf) {
                showAlertRecuperation("Les mots de passe ne sont pas identiques.", false);
        } else {
                try {
                        const response = await fetch('../scripts/reinitialisation.php', {
                                method: 'POST',
                                headers: {
                                        'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(data)
                        });

                        if (!response.ok) {
                                throw new Error(`Erreur réseau : ${response.status} ${response.statusText}`);
                        }

                        const result = await response.json();

                        if (result.success) {
                                document.querySelector('#formRecuperation').reset();
                                showAlertRecuperation(result.message, true);
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
                        sendBtn.disabled = false;
                        sendBtn.textContent = 'Envoyer';
                }
        }

});

const showAlertRecuperation = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#msg');
        if (!err_msg) return;
        const alert = document.createElement('div');
        alert.className = `alert-message p-2 w-200 px-8 mx-auto mb-4 rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
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
        }, isSuccess ? 2000 : 5000);
};

function verifierMotDePasse(password) {
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return regex.test(password);
}