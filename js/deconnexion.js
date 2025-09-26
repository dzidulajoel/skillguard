document.querySelector(".logout").addEventListener("click", function () {
        fetch("../config/logout.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" }
        })
                .then(res => res.json())
                .then(data => {
                        if (data.success) {
                                showAlertdeconnexion(data.message, true);
                                setTimeout(() => {
                                        window.location.href = "/skillguard/connexion";
                                }, 3000);
                        } else {
                                showAlertdeconnexion("Erreur : " + data.message, false);
                        }
                })
                .catch(err => {
                        console.error(err);
                        showAlertdeconnexion("Erreur serveur : " + err.message, false);
                });
});

const showAlertdeconnexion = (message, isSuccess = true) => {
        const err_msg = document.querySelector('#err_msg_deconnexion');
        if (!err_msg) return;

        const alert = document.createElement('div');
        alert.className = `alert-message p-4 w-70 h-8 flex justify-center items-center mx-auto rounded-md text-white text-center text-sm ${isSuccess ? 'bg-[#001436]' : 'bg-red-600'}`;
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
        }, isSuccess ? 3000 : 3500);
};
