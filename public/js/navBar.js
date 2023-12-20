let startingPosition = window.scrollY;

document.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    // console.log(window.scrollY);

    if (window.scrollY) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
