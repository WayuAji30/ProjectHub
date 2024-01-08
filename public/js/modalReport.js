var modal = document.querySelector(".modal-report");
var openModalBtns = document.querySelectorAll(".openModalBtn");

function openModal() {
    modal.classList.remove("hidden");
}

function closeModal() {
    modal.classList.add("hidden");
}

openModalBtns.forEach(function (btn) {
    btn.addEventListener("click", openModal);
});

var cancelBtn = document.querySelector('.modal-report button[form="none"]');
cancelBtn.addEventListener("click", closeModal);
