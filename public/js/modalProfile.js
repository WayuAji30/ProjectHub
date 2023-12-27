document.addEventListener("DOMContentLoaded", function () {
    var closeButton = document.getElementById("close");
    var modal = document.getElementById("modalProfile");

    closeButton.addEventListener("click", function () {
        modal.classList.add("fade-out");
        setTimeout(function () {
            modal.style.display = "none";
        }, 300);
    });
});
