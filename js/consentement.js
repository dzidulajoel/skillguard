const checkboxes = document.querySelectorAll('.consent-checkbox');
const btnStart = document.getElementById('btn-start-test');

function verifierConsentement() {
        const allChecked = Array.from(checkboxes).every(chk => chk.checked);
        if (allChecked) {
                btnStart.disabled = false;
                btnStart.classList.remove('bg-gray-400', 'cursor-not-allowed');
                btnStart.classList.add('bg-[#00B8D9]', 'hover:opacity-90', 'cursor-pointer');
        } else {
                btnStart.disabled = true;
                btnStart.classList.remove('bg-[#00B8D9]', 'hover:opacity-90', 'cursor-pointer');
                btnStart.classList.add('bg-gray-400', 'cursor-not-allowed');
        }
}
checkboxes.forEach(chk => chk.addEventListener('change', verifierConsentement));


btnStart.addEventListener('click', async () => {
        const testId = btnStart.dataset.idTest;
        try {
                const response = await fetch('../../scripts/verification_candidat_test_passage.php', {
                        method: 'POST',
                        body: JSON.stringify({ test_id: testId })
                });

                if (!response.ok) throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                const result = await response.json();

                if (result.success) {
                        window.location.href = `qcm?id=${testId}`
                }
                else {
                        showAlertPasse(result.message, false)
                        setTimeout(()=>{
                                window.location.href = result.redirect
                        }, 2000)
                }
        }
        catch (error) {
                showAlertPasse(error.message, false)
        }
});


const showAlertPasse = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg_suppression_offre');
        if (!err_msg) return;
        const alert = document.createElement('div');
        alert.className = `alert-message "py-4 px-8 w-auto h-10 flex justify-center items-center mx-auto rounded-md text-white text-center text-sm ${isSuccess ? 'bg-green-600' : 'bg-red-600'}`;
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
        }, isSuccess ? 2000 : 3000);
};