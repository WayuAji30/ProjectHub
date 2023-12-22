// Set the initial state when the page loads
document.addEventListener("DOMContentLoaded", function () {
    // Set btnID as active and btnENG with opacity-30
    document.getElementById("btnID").classList.add("opacity-100");
    document.getElementById("btnENG").classList.remove("opacity-100");
});

function switchLanguage(language) {
    if (language === "ID") {
        document.getElementById("btnID").classList.add("opacity-100");
        document.getElementById("btnENG").classList.remove("opacity-100");
    } else if (language === "ENG") {
        document.getElementById("btnID").classList.remove("opacity-100");
        document.getElementById("btnENG").classList.add("opacity-100");
    }
}
