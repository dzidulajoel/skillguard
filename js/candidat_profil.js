document.querySelector('#mettre_a_jour').addEventListener('submit', async (event) => {
        event.preventDefault();

        const nom = document.getElementById('nom').value;
        const prenom = document.getElementById('prenom').value;
        const pays = document.getElementById('pays').value;
        const sexe = document.getElementById('sexe').value;
        const date = document.getElementById('date').value;
        const ville = document.getElementById('ville').value;
        const email = document.getElementById('email').value;

        const data = { nom, prenom, pays, ville, sexe, date, email };

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


        try {
                const response = await fetch('../scripts/candidat_profil.php', {
                        method: 'POST',
                        body: JSON.stringify(data)
                });

                if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                const result = await response.json();
                if (result.success) {
                        showAlert(result.message, true);
                        document.getElementById('pays').value = result.data.pays;
                        document.getElementById('sexe').value = result.data.sexe;
                        document.getElementById('ville').value = result.data.ville;
                        document.getElementById('date').value = result.data.date;
                }
                else {
                        showAlert(result.message, false)
                }
        } catch (error) {
                showAlert(error.message, true)
        }
});



const button_mettre_a_jour = document.querySelector('#button_mettre_a_jour');
const edition_profil = document.querySelector('#edition_profil');
edition_profil.addEventListener('click', () => {
        if (button_mettre_a_jour.classList.contains('hidden')) {
                button_mettre_a_jour.classList.remove('hidden')
        } else {
                button_mettre_a_jour.classList.add('hidden')
        }
})