// Fungsi untuk menangani klik pada dropdown-notif
function handleDropdownClick() {
    // Temukan elemen modal-overlay dan tambahkan kelas overlay
    var modalOverlay = document.getElementById("modalOverlay");
    modalOverlay.style.display = "block"; // Tampilkan overlay
    modalOverlay.classList.add("overlay");
}

// Tambahkan event listener ke elemen dokumen
document.addEventListener("click", function (event) {
    var dropdownNotif = document.querySelector(".dropdown-notif");
    var modalOverlay = document.getElementById("modalOverlay");

    // Periksa apakah klik dilakukan di dalam atau di luar dropdown-notif
    if (!dropdownNotif.contains(event.target)) {
        // Jika di luar, sembunyikan overlay
        modalOverlay.style.display = "none";
        modalOverlay.classList.remove("overlay");
    }
});
