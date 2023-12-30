document.addEventListener("DOMContentLoaded", function () {
    var buttonElement = document.getElementById("jelajahi");
    var hoverElement = document.getElementById("jelajahiOverlay");

    buttonElement.addEventListener("click", function () {
        hoverElement.classList.add("overlay");
    });
});
