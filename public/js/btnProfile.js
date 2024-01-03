document.addEventListener("DOMContentLoaded", function () {
    var btnProfile = document.getElementById("btnProfile");
    var profileOverlay = document.getElementById("profileOverlay");
    var dropdownContent = document.getElementById("dropdownContent");

    // Tambahkan event listener untuk menanggapi klik pada elemen dengan id "btnProfile"
    btnProfile.addEventListener("click", function (event) {
        // Tampilkan kelas "overlay" pada elemen dengan id "profileOverlay"
        profileOverlay.classList.add("overlay");
        event.stopPropagation(); // Menghentikan penyebaran ke event click dokumen
    });

    // Tambahkan event listener ke dokumen untuk menanggapi klik di luar elemen dengan id "profileOverlay"
    document.addEventListener("click", function (event) {
        var isClickInside =
            profileOverlay.contains(event.target) ||
            btnProfile.contains(event.target) ||
            dropdownContent.contains(event.target);

        if (!isClickInside) {
            // Hapus kelas "overlay" jika di luar elemen dengan id "profileOverlay", "btnProfile", dan "dropdownContent"
            profileOverlay.classList.remove("overlay");
        }
    });

    // Tambahkan event listener untuk menanggapi klik pada overlay
    profileOverlay.addEventListener("click", function () {
        // Hapus kelas "overlay" saat overlay diklik
        profileOverlay.classList.remove("overlay");
    });

    // Tambahkan event listener untuk menanggapi klik pada dropdown-content
    dropdownContent.addEventListener("click", function (event) {
        // Menghentikan penyebaran klik ke elemen lain
        event.stopPropagation();
    });
});
