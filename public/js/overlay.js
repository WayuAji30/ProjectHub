document.getElementById("jelajahi").addEventListener("mouseenter", function () {
    var hoverElements = document.querySelectorAll('[id^="hover"]');
    hoverElements.forEach(function (element) {
        element.classList.add("overlay");
    });
});

document.getElementById("jelajahi").addEventListener("mouseleave", function () {
    var hoverElements = document.querySelectorAll('[id^="hover"]');
    hoverElements.forEach(function (element) {
        element.classList.remove("overlay");
    });
});
