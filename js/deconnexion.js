document.querySelector(".logout").addEventListener("click", function () {
        fetch("../config/logout.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" }
        })
                .then(res => res.json())
                .then(data => {
                        if (data.success) {
                                alert(data.message);
                                window.location.href = "/skillguard/connexion"; // redirection après déconnexion
                        } else {
                                alert("Erreur : " + data.message);
                        }
                })
                .catch(err => console.error(err));
});
