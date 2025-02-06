document.addEventListener("DOMContentLoaded", function () {
    let video = document.querySelector("video");

    if (video) {
        video.play().catch(error => {
            console.log("Autoplay blocked. Waiting for user interaction...");
        });
    }
});
