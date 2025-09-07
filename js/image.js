const input = document.getElementById('imageInput');
const preview = document.getElementById('previewContainer');

input.addEventListener('change', () => {
        const file = input.files[0];
        if (!file) return;

        // Préparer les données avec FormData
        const formData = new FormData();
        formData.append("image", file);

        fetch('../scripts/image.php', {
                method: 'POST',
                body: formData
        })
                .then(res => res.json())
                .then(data => {
                        if (data.success) {
                                showAlert(data.message, true)
                                preview.innerHTML = `
                        <img src="../scripts/${data.url}" alt="Preview" class="w-full h-full object-cover rounded-full">
                        <div  class="z-500 cursor-pointer w-6 h-6 flex items-center justify-center p-1 rounded-full custom_shadow absolute top-14 left-14">
                                <label for="imageInput" class="cursor-pointer ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#00134d" d="m16 2l5 5v14.008a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 21.008V2.992C3 2.444 3.445 2 3.993 2zm-3 10h3l-4-4l-4 4h3v4h2z"/></svg>                                                                
                                </label>
                                <input type="file" name="image" id="imageInput" accept="image/*" hidden>
                        </div>
                `;
                        } else {
                                showAlert(data.message, false);
                        }
                })
                .catch(err => {
                        console.error(err);
                        showAlert('Erreur réseau', false);
                });
});


        const showAlert = (message, isSuccess = true) => {
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