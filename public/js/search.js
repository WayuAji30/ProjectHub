var clearButton = document.getElementById("clearButton");
var hasilPencarian = document.getElementById("hasilPencarian");
var searchInput = document.getElementById("searchInput");
var searchHelp = document.getElementById("searchHelp");
var overlay = document.getElementById("hover");

clearButton.addEventListener("click", function (event) {
    if (event.target === clearButton) {
        hasilPencarian.innerHTML = "";
        event.stopPropagation();
    }
});

searchInput.addEventListener("click", function () {
    searchHelp.classList.toggle("hidden");
    overlay.classList.add("overlay");
});

searchInput.addEventListener("input", function () {
    if (searchInput.value.trim() !== "") {
        searchHelp.classList.add("hidden");
        overlay.classList.add("overlay");
        searchInput.classList.remove("text-light-50");
    } else {
        overlay.classList.add("overlay");
        searchHelp.classList.remove("hidden");
        searchInput.classList.add("text-light-50");
    }
});

document.addEventListener("click", function (event) {
    if (
        !searchInput.contains(event.target) &&
        !searchHelp.contains(event.target)
    ) {
        searchHelp.classList.add("hidden");
        overlay.classList.remove("overlay");
    }
});
