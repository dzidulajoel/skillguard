const localVideo = document.querySelector('#localVideo');

navigator.mediaDevices.getUserMedia({
        video: true,
        audio: false
})
        .then(stream => {
                localVideo.srcObject = stream;
                localVideo.play(); 
        })
        .catch(err => {
                console.error("Erreur d'accès à la caméra :", err);
                alert("Impossible d'accéder à la caméra.");
        });
