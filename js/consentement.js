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

btnStart.addEventListener('click', () => {
        const testId = btnStart.dataset.idTest;
        window.location.href = `qcm?id=${testId}`
});
