$(document).ready(function () {
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
