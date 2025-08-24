document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('#menu a');
        const sections = document.querySelectorAll('.section');

        // Fonction pour afficher une section et cacher les autres
        function showSection(id) {
                sections.forEach(sec => {
                        sec.classList.add('hidden');
                });
                const activeSection = document.getElementById(id);
                if (activeSection) activeSection.classList.remove('hidden');

                // Gérer l'état actif des liens
                links.forEach(link => {
                        link.classList.remove('bg-blue-800');
                });
                const activeLink = document.querySelector(`#menu a[data-section="${id}"]`);
                if (activeLink) activeLink.classList.add('bg-blue-800');

                // Sauvegarder dans localStorage
                localStorage.setItem('activeSection', id);
        }

        // Restaurer section active depuis localStorage
        const savedSection = localStorage.getItem('activeSection') || 'section1';
        showSection(savedSection);

        // Ajouter l'événement click sur les liens
        links.forEach(link => {
                link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const sectionId = link.dataset.section;
                        showSection(sectionId);
                });
        });
});
