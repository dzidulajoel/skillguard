const form_offre = document.querySelector('#form_offre');
form_offre.addEventListener('submit', async (event) => {
        event.preventDefault();
        const titre = document.getElementById('titre').value;
        const lieu = document.getElementById('lieu').value;
        const contrat = document.getElementById('contrat').value;
        const experience = document.getElementById('experience').value;
        const statut = document.getElementById('statut').value;
        const competence = document.getElementById('competence').value;
        const date_limite = document.getElementById('date_limite').value;
        const description = document.getElementById('description').value;
        const mission = document.getElementById('mission').value;
        const profil = document.getElementById('profil').value;
        const score = document.getElementById('score').value;


        const data = {
                titre,
                lieu,
                contrat,
                experience,
                statut,
                competence,
                date_limite,
                description,
                mission,
                profil,
                score
        };
        
        let tousRemplis = true;
        for (let key in data) {
                if (!data[key] || data[key].trim() === "") {
                        showAlert_o("Tous les champs doivent être remplis !", false);
                        tousRemplis = false;
                        break;
                }
        }

        if (tousRemplis) {
                try {
                        const response = await fetch('../scripts/creer_offre.php', {
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
                                showAlert_o(result.message, true);
                                form_offre.reset();
                                closeForm()
                        } else {
                                showAlert_o(result.message, false);
                        }
                }
                catch (err) {
                        showAlert_o("Une erreur est survenue. Veuillez réessayer", false);
                }
        }

});

const showAlert_o = (message, isSuccess = true) => {
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

const form_creation_offre = document.querySelector('#form_creation_offre');
const add_offre = document.querySelector('#add_offre');
const section2 = document.querySelector('#section2');
const close_offre_creation = document.querySelector('#close_offre_creation');
const modal_content = document.querySelector('#modal_content');


function openForm() {
        form_creation_offre.classList.remove('hidden', 'opacity-0');
        form_creation_offre.classList.add('opacity-100');
        section2.classList.add('hidden');
}

function closeForm() {
        form_creation_offre.classList.remove('opacity-100');
        form_creation_offre.classList.add('opacity-0');

        // Après l'animation, masquer complètement
        setTimeout(() => {
                form_creation_offre.classList.add('hidden');
                section2.classList.remove('hidden');
        }, 300); // durée de la transition
}

add_offre.addEventListener('click', openForm);

close_offre_creation.addEventListener('click',
        closeForm);
close_offre_creation.addEventListener('click', (e)=>{
        e.preventDefault();
});





