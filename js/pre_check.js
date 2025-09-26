const localVideo = document.querySelector('#localVideo');

navigator.mediaDevices.getUserMedia({
        video: true,
        audio: true
})
        .then(stream => {
                localVideo.srcObject = stream;
                localVideo.play();
        })
        .catch(err => {
                showAlert_camera_micro("Impossible d'accéder à la caméra. Veuillez activer la caméra avant de faire le test", false);
        });


const showAlert_camera_micro = (message, isSuccess = true) => {
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
        }, isSuccess ? 1500 : 3000);
};