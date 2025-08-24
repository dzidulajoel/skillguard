const inscription_candidat_form = document.querySelector('#inscription_candidat_form');
const creer_un_compte_candidat = document.querySelector('#creer_un_compte_candidat');
const consent = document.querySelector('#consent');

consent.addEventListener("change", function () {
        creer_un_compte_candidat.disabled = !this.checked;
});

inscription_candidat_form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const nom = document.getElementById('nom').value;
        const prenom = document.getElementById('prenom').value;
        const email = document.getElementById('email').value;
        const genre = document.getElementById('genre').value;
        const password = document.getElementById('password').value;
        const conf_password = document.getElementById('conf_password').value;

        const data = {
                nom,
                prenom,
                email,
                genre,
                password,
                conf_password,
        };

        let tousRemplis = true;
        for (let key in data) {
                if (!data[key] || data[key].trim() === "") {
                        showAlert("Tous les champs doivent être remplis !", false);
                        tousRemplis = false;
                        break;
                }
        }

        if (tousRemplis) {
                if (!verifierMotDePasse(data.password)) {
                        showAlert("Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&).", false);
                } else if (data.password !== data.conf_password) {
                        showAlert("Les mots de passe ne sont pas identiques.", false);
                } else {
                        try {
                                const response = await fetch('../scripts/inscription_candidat.php', {
                                        method: 'POST',
                                        headers: {
                                                'Content-Type': 'application/json'
                                        },
                                        body: JSON.stringify(data)
                                });

                                if (!response.ok) {
                                        throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                                }
                                const result = await response.json();
                                if (result.success) {
                                        showAlert("Inscription reussie.", true);
                                        inscription_candidat_form.reset();
                                        creer_un_compte_candidat.disabled = true;
                                        window.location.href = '../connexion';
                                } else {
                                        showAlert(result.message, false);
                                }
                        }
                        catch (err) {
                                showAlert("Une erreur est survenue. Veuillez réessayer", false);
                        }
                }
        }
});


function verifierMotDePasse(password) {
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return regex.test(password);
}

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

