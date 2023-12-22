let startingPosition = window.scrollY;

document.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    const bahasaElement = document.querySelector("#bahasa");
    const btnLoginElement = document.getElementById("#btnLogin");

    if (window.scrollY > startingPosition) {
        header.classList.add("scrolled");
        bahasaElement.classList.add("scroll");
        btnLoginElement.classList.add("scrollbtn");
    } else {
        header.classList.remove("scrolled");
        bahasaElement.classList.remove("scroll");
        btnLoginElement.classList.remove("scrollbtn");
    }

    startingPosition = window.scrollY;
});
