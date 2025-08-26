const connexion_button = document.querySelector('#connexion_button');
const connexion_form = document.querySelector('#connexion_form');
const seSouvenir = document.getElementById('seSouvenir');



window.addEventListener('DOMContentLoaded', () => {
        const emailInput = document.getElementById('email');

        if (localStorage.getItem('seSouvenir') === 'true') {
                seSouvenir.checked = true;
                const savedEmail = localStorage.getItem('savedEmail');
                if (savedEmail) {
                        emailInput.value = savedEmail;
                }
        } else {
                seSouvenir.checked = false;
        }
});



connexion_form.addEventListener('submit', async (event) => {

        seSouvenirSetCookie()

        event.preventDefault();
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        const data = {
                email,
                password,
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
                try {
                        const response = await fetch('../scripts/connexion.php', {
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
                                showAlert("Connexion réussie.", true);
                                connexion_form.reset();
                                const redirectMap = {
                                        admin: '../admin',
                                        recruteur: '../recruteur',
                                        candidat: '../candidat'
                                };
                                
                                window.location.href = redirectMap[result.role] || '../candidat';
                        }
                        else {
                                showAlert(result.message, false);
                        }
                }
                catch (err) {
                        showAlert("Une erreur est survenue. Veuillez réessayer", false);
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

function seSouvenirSetCookie() {
        if (seSouvenir) {
                localStorage.setItem('seSouvenir', 'true');
                localStorage.setItem('savedEmail', document.getElementById('email').value.trim());
        } else {
                localStorage.removeItem('seSouvenir');
                localStorage.removeItem('savedEmail');
        }
}