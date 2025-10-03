console.log("sdfdf");

document.addEventListener("DOMContentLoaded", function () {
    // const imsRightDiv = imsModal.querySelector(".modal-content-right"); // right thumbnails div
    // const imsModal = document.getElementById("image-modal"); // modal
    // const imsLeftImg = imsModal.querySelector(".modal-content-left img"); // left big image

    const imsModal = document.getElementById("image-modal");
    const imsLeftImg = imsModal.querySelector(".modal-content-left img");
    const imsRightDiv = imsModal.querySelector(".modal-content-right");
    const imsCloseBtn = imsModal.querySelector(".close-modal");
    const imsGalleryImages = document.querySelectorAll(".gallery-image");
    // function imsSyncHeight() {
    //     if (imsLeftImg && imsRightDiv) {
    //         // left image की actual height के बराबर right div की height set कर दो
    //         imsRightDiv.style.height = imsLeftImg.clientHeight + "px";
    //         imsRightDiv.style.overflowY = "auto";
    //     }
    // }

    function imsSyncHeight() {
        if (imsLeftImg && imsRightDiv) {
            imsRightDiv.style.height = imsLeftImg.clientHeight + "px";
        }
    }

    imsGalleryImages.forEach((img) => {
        img.addEventListener("click", function () {
            imsModal.style.display = "block"; // modal show
            imsLeftImg.src = this.src; // left में वही image दिखाओ

            imsLeftImg.onload = imsSyncHeight; // height sync करो
        });
    });

    // पहली बार जब modal open हो
    // imsLeftImg.addEventListener("load", imsSyncHeight);

    // अगर window resize हो जाए तो दुबारा set करो
    // window.addEventListener("resize", imsSyncHeight);

    // safety: modal open होते ही भी force कर दो
    // const imsObserver = new MutationObserver(() => imsSyncHeight());
    // imsObserver.observe(imsModal, { attributes: true, attributeFilter: ["style", "class"] });

    imsRightDiv.querySelectorAll("img").forEach((thumb) => {
        thumb.addEventListener("click", function () {
            imsLeftImg.src = this.src;
            imsSyncHeight();
        });
    });

    // Close button
    imsCloseBtn.addEventListener("click", function () {
        imsModal.style.display = "none";
    });

    // Resize होने पर भी adjust करो
    window.addEventListener("resize", imsSyncHeight);
});
