const emailModals = document.querySelector('.emailModal');
const btn = document.getElementById("emailbtnsend");

emailModals.addEventListener('submit', async (e) => {
        e.preventDefault();
        const emailInput = document.getElementById('emailSend');
        const hiddenInput = document.getElementById('hiddenInput');
        const email = emailInput.value;
        const testId = hiddenInput.dataset.recieve;
        const data = { email, testId }
        btn.innerHTML = 'Envoie en cours ...'

        try {
                const response = await fetch('../scripts/invitation_mail.php', {
                        method: 'POST',
                        body: JSON.stringify(data)
                });

                if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                const result = await response.json();
                if (result.success) {
                        showAlertMail(result.message, true);
                        document.querySelector('#sendLinkForm').reset()
                        close()
                }
                else {
                        showAlertMail(result.message, false)
                }
        } catch (error) {
                showAlertMail(error.message, true)
        }

})

function close() {

        emailModals.style.transition = "opacity 0.3s ease";
        emailModals.style.opacity = 0;
        emailModals.addEventListener('transitionend', () => {
                emailModals.classList.add('hidden');
        }, { once: true });
}

const showAlertMail = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg_test');
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