const form_qcm_candidat_reponse = document.querySelector('#form_qcm_candidat_reponse');
const button_submit_test_qcm = document.querySelector('#button_submit_test_qcm');


document.querySelector('#offre_back').addEventListener('click', ()=>{
        window.location.href = "../../";
})

form_qcm_candidat_reponse.addEventListener('submit', async (e) => {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);

        const data = {};
        formData.forEach((value, key) => {
                if (key.endsWith('[]')) {
                        const cleanKey = key.slice(0, -2);
                        if (!data[cleanKey]) data[cleanKey] = [];
                        data[cleanKey].push(value);
                } else {
                        data[key] = value;
                }
        });

        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        const testId = params.get("id");

        try {
                const response = await fetch('../../../scripts/correction_qcm.php', {
                        method: 'POST',
                        headers: {
                                'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                                test_id:testId,
                                data:data
                        })
                });

                if (!response.ok) {
                        throw new Error(`Erreur de réseau : ${response.status} ${response.statusText}`);
                }
                const result = await response.json();

                if (result.success) {
                        console.log(result.test_id);
                        console.log(result.id);
                        console.log(result.recruteur_id);
                        console.log(result.questions);
                        console.log(result.data);
                        console.log(result.total);
                        console.log(result.offre_note);
                        form_qcm_candidat_reponse.reset();
                        button_submit_test_qcm.disabled = true;
                        button_submit_test_qcm.innerHTML = '<a href="../../">Retour à l\'acceuil</a>'
                } else {
                        showAlert_o(result.message, false);
                }

        } catch (err) {
                showAlert_o(err.message, false);
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
