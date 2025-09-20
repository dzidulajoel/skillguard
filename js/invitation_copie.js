document.querySelectorAll("[data-link]").forEach(bouton => {
        bouton.addEventListener("click", async () => {
                const testId = bouton.dataset.link;
                const data = {testId}
                try {
                        const response = await fetch('../scripts/invitation_copie.php', {
                                method: 'POST',
                                body: JSON.stringify(data)
                        });

                        if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                        const result = await response.json();
                        if (result.success) {
                                showAlert(result.message, true);
                                await navigator.clipboard.writeText(result.data);
                                bouton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="none" stroke="#22c55e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L7 17l-5-5m20-2l-7.5 7.5L13 16"/></svg>'
                        }
                        else {
                                showAlert(result.message, false)
                        }
                } catch (error) {
                        showAlert(error.message, true)
                }
        });
});

const showAlert = (message, isSuccess = true) => {
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