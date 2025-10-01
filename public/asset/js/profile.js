function previewImage(inputId, previewId) {
    const fileInput = document.getElementById(inputId);
    const previewImg = document.getElementById(previewId);

    if (!fileInput || !previewImg) return;
    fileInput.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                previewImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
}

Document.addEventListener("DOMContentLoaded", function () {
    previewImage("profile-banner", "banner-preview");
    previewImage("profile-image", "image-preview");
});
