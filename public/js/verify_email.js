$(document).ready(function () {
    var totalKlik = 0;

    $("#btn-verify").on("click", function () {
        window.open("https://mail.google.com/mail/u/0/#inbox", "_blank");
    });

    $("#kirim-ulang").on("click", function () {
        // Get CSRF token from the meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        // Make the AJAX request
        $.ajax({
            type: "POST",
            url: "/send_verify_email",
            data: {
                id_user: $(this).data("id_user"),
                email: $(this).data("email"),
            },
            beforeSend: function (request) {
                request.setRequestHeader("X-CSRF-TOKEN", csrfToken);
            },
        });

        $("#btn-verify").removeClass("bg-[#ccc]");
        $("#btn-verify").addClass("bg-primary-50 hover:bg-primary-70");
    });
});
