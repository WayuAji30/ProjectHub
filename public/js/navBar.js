let lastScrollPosition = 0;

document.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    const bahasaElement = document.querySelector("#bahasa");
    const navListWhite = document.getElementById("navlistWhite");
    const navListBlue = document.getElementById("navlistBlue");
    const flagID = document.getElementById("flagID");
    const logoWhite = document.getElementById("logoWhite");
    const logoBlue = document.getElementById("logoBlue");
    const btnLoginElement = document.getElementById("btnLogin");

    const currentScrollPosition = window.scrollY;

    // Check if the screen width is larger than a certain value (adjust as needed)
    const isLargeScreen = window.matchMedia("(min-width: 1024px)").matches;

    if (currentScrollPosition > lastScrollPosition) {
        // Scrolling down
        header.classList.add("scrolled");
        bahasaElement.classList.add("scroll");
        btnLoginElement.classList.add("scrollbtn");
        flagID.classList.add("border-primary-50");
        navListBlue.style.display = "block";
        navListWhite.style.display = "none";

        // Check if it's a large screen before toggling logo display
        if (isLargeScreen) {
            logoBlue.style.display = "block";
            logoWhite.style.display = "none";
        }
    } else {
        // Scrolling up
        if (currentScrollPosition === 0) {
            // The top of the page is reached
            header.classList.remove("scrolled");
            bahasaElement.classList.remove("scroll");
            btnLoginElement.classList.remove("scrollbtn");
            flagID.classList.remove("border-primary-50");
            navListBlue.style.display = "none";
            navListWhite.style.display = "block";

            // Check if it's a large screen before toggling logo display
            if (isLargeScreen) {
                logoWhite.style.display = "block";
                logoBlue.style.display = "none";
            }
        }
    }

    lastScrollPosition = currentScrollPosition;
});
