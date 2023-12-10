const countdownElement = document.querySelector(".countdown");
const valueElements = countdownElement.querySelectorAll(
    'span[style^="--value"]'
);

// Set the countdown time (in seconds)
var countdownTime = 60;

// Update the countdown every second
var countdownInterval = setInterval(function () {
    var minutes = Math.floor(countdownTime / 60);
    var seconds = countdownTime % 60;

    // Update the countdown display
    valueElements[0].style.setProperty("--value", minutes);
    valueElements[1].style.setProperty(
        "--value",
        seconds < 10 ? "0" + seconds : seconds
    );

    // Decrease the countdown time
    countdownTime--;

    // Check if the countdown has reached zero
    if (countdownTime < 0) {
        clearInterval(countdownInterval); // Stop the countdown
        
    }
}, 1000); // Update every second
