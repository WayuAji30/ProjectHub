function switchLanguage(language) {
    // Mengambil referensi ke elemen tombol ID dan ENG
    var btnID = document.getElementById("btnID");
    var btnENG = document.getElementById("btnENG");

    // Mengubah kelas opacity-30 sesuai dengan tombol yang diklik
    if (language === "ID") {
        btnID.classList.remove("opacity-30");
        btnENG.classList.add("opacity-30");
    } else if (language === "ENG") {
        btnID.classList.add("opacity-30");
        btnENG.classList.remove("opacity-30");
    }
}
