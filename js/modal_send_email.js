const emailModal = document.getElementById('emailModal');

// Ouvrir la modale avec fade
document.querySelectorAll(".openModal").forEach(bouton => {
        bouton.addEventListener("click", () => {
                const testId = bouton.dataset.mail;
                const hiddenInput = document.createElement('input');

                hiddenInput.type = 'hidden';
                hiddenInput.id = "hiddenInput"
                hiddenInput.name = 'monChampCache';
                hiddenInput.value = 'valeurCachee';

                // Attribut data-recieve
                hiddenInput.dataset.recieve = testId;
                emailModal.appendChild(hiddenInput);
                emailModal.classList.remove('hidden');
                emailModal.style.opacity = 0;
                requestAnimationFrame(() => {
                        emailModal.style.transition = "opacity 0.3s ease";
                        emailModal.style.opacity = 1;
                });
        });
});

// Fermer la modale avec fade
document.querySelector('#closeModalBtn').addEventListener('click', () => {
        emailModal.style.transition = "opacity 0.3s ease";
        emailModal.style.opacity = 0;
        emailModal.addEventListener('transitionend', () => {
                emailModal.classList.add('hidden');
        }, { once: true });
});
