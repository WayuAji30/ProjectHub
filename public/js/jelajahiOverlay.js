var jelajahi = document.getElementById("jelajahi");
var jelajahiOverlay = document.getElementById("jelajahiOverlay");

// Tambahkan class "overlay" pada klik elemen dengan id "jelajahi"
jelajahi.addEventListener("click", function () {
    jelajahiOverlay.classList.add("overlay");
});

// Hapus class "overlay" pada klik elemen di luar dropdown
document.addEventListener("click", function (event) {
    var isJelajahiClick = jelajahi.contains(event.target);
    if (!isJelajahiClick) {
        jelajahiOverlay.classList.remove("overlay");
    }
});
