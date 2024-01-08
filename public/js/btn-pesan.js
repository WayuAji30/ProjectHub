document
    .getElementById("dropdownPesan")
    .addEventListener("click", function (event) {
        event.stopPropagation();
        var allOverlays = document.querySelectorAll(".overlay");
        allOverlays.forEach(function (overlay) {
            overlay.classList.remove("overlay");
        });

        document.getElementById("modalOverlay-pesan").classList.add("overlay");
    });

document.addEventListener("click", function (event) {
    var modalOverlay = document.getElementById("modalOverlay-pesan");
    var dropdownPesan = document.getElementById("dropdownPesan");
    if (
        event.target !== dropdownPesan &&
        !dropdownPesan.contains(event.target)
    ) {
        modalOverlay.classList.remove("overlay");
    }
});
