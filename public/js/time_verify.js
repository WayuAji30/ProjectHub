$(document).ready(function () {
    // Set the countdown time (in seconds)
    var countdownTime = 60;

    $('#kirim-ulang').removeClass('text-primary-50');
    $('#kirim-ulang').addClass('text-[#ccc]');
    $('#kirim-ulang').attr("disabled", true); 
    
    // Function to update the countdown
    function updateCountdown() {
        var minutes = Math.floor(countdownTime / 60);
        var seconds = countdownTime % 60;

        // Update the countdown display
        $(".countdown span:eq(0)").css("--value", minutes);
        $(".countdown span:eq(1)").css(
            "--value",
            seconds < 10 ? "0" + seconds : seconds
        );

        // Decrease the countdown time
        countdownTime--;

        // Check if the countdown has reached zero
        if (countdownTime < 0) {
            clearInterval(countdownInterval); // Stop the countdown
            $('#kirim-ulang').removeClass('text-[#ccc]');
            $('#kirim-ulang').addClass('text-primary-50');
            $('#kirim-ulang').attr("disabled", false); 
        }
    }

    // Update the countdown every second
    var countdownInterval = setInterval(updateCountdown, 1000);

    // Reset the countdown when the "Kirim Ulang" link is clicked
    $("#kirim-ulang").on("click", function () {
        countdownTime = 60; // Reset countdown time
        clearInterval(countdownInterval); // Stop the existing countdown
        countdownInterval = setInterval(updateCountdown, 1000); // Start a new countdown

        $('#kirim-ulang').removeClass('text-primary-50');
        $('#kirim-ulang').addClass('text-[#ccc]');
        $(this).attr("disabled", true); 

        updateCountdown(); // Update immediately after resetting

        $('#form-verify').submit();
    });
});