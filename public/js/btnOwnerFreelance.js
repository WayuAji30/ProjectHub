document.getElementById("btnFreelancer").addEventListener("click", function () {
    document.getElementById("freelancer").style.display = "block";
    document.getElementById("owner").style.display = "none";
    document.getElementById("btnFreelancer").classList.add("text-primary-50");
    document.getElementById("btnFreelancer").classList.remove("text-light-70");
    document.getElementById("btnOwner").classList.add("text-light-70");
    document.getElementById("btnOwner").classList.remove("text-primary-50");
});

document.getElementById("btnOwner").addEventListener("click", function () {
    document.getElementById("freelancer").style.display = "none";
    document.getElementById("owner").style.display = "block";
    document.getElementById("btnFreelancer").classList.add("text-light-70");
    document
        .getElementById("btnFreelancer")
        .classList.remove("text-primary-50");
    document.getElementById("btnOwner").classList.add("text-primary-50");
    document.getElementById("btnOwner").classList.remove("text-light-70");
});
