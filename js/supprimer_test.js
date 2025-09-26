const supprimer_tests = document.querySelectorAll('.supprimer_tests');
supprimer_tests.forEach(btn => {
        btn.addEventListener('click', async () => {
                const testId = btn.dataset.test;
                const data = { testId };
                try {
                        const response = await fetch('../scripts/supprimer_test.php', {
                                method: 'POST',
                                body: JSON.stringify(data)
                        });

                        if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                        const result = await response.json();
                        if (result.success) {
                                showAlerts_test(result.message, true);
                                const testElement = btn.closest('tr');
                                if (testElement) {
                                        testElement.remove();
                                }
                                
                        }
                        else {
                                showAlerts_test(result.message, false)
                        }
                }
                catch (error) {
                        showAlerts_test(error.message, true)
                }
        });
})


const showAlerts_test = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg_test');
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
                }, 1000);
        }, isSuccess ? 1000 : 1500);
};


