document.querySelector('#mettre_a_jour_form').addEventListener('submit', async (event) => {
        event.preventDefault();

        const entreprise = document.getElementById('entreprise').value;
        const pays = document.getElementById('pays').value;
        const ville = document.getElementById('ville').value;
        const email = document.getElementById('email').value;

        const data = { entreprise, pays, ville, email };

        const showAlerts = (message, isSuccess = true) => {
                const err_msg = document.querySelector('#err_msg_profil');
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

        try {
                const response = await fetch('../scripts/recruteur_profil.php', {
                        method: 'POST',
                        body: JSON.stringify(data)
                });

                if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                const result = await response.json();
                if (result.success) {
                        showAlerts(result.message, true);
                        document.getElementById('pays').value = result.data.pays;
                        document.getElementById('entreprise').value = result.data.entreprise;
                        document.getElementById('ville').value = result.data.ville;
                        document.getElementById('email').value = result.data.email;
                }
                else {
                        showAlerts(result.message, false)
                }
        } catch (error) {
                showAlerts(error.message, true)
        }
});

const button_mettre_a_jour_recruteur = document.querySelector('#button_mettre_a_jour_recruteur');
const edition_profil = document.querySelector('#edition_profil');
edition_profil.addEventListener('click', () => {
        if (button_mettre_a_jour_recruteur.classList.contains('hidden')) {
                button_mettre_a_jour_recruteur.classList.remove('hidden')
        } else {
                button_mettre_a_jour_recruteur.classList.add('hidden')
        }
})
