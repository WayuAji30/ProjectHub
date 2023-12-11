$(document).ready(function () {
    var totalKlik = 0;

    $("#btn-verify").on("click", function () {
        // Get CSRF token from the meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        if (totalKlik > 0) {
            alert("hii");

            $("#btn-verify").removeClass("bg-primary-50 hover:bg-primary-70");
            $("#btn-verify").addClass("bg-primary-50");

            window.open("https://mail.google.com/mail/u/0/#inbox", "_blank");

            //$("#btn-verify").prop("disabled", true);
        } else {
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
                success: function (response) {
                    console.log(response.status);
                },
                error: function (error) {
                    console.log(error);
                },
            });

            $("#btn-verify").removeClass("bg-primary-50 hover:bg-primary-70");
            $("#btn-verify").addClass("bg-[#000000]");

            //window.open("https://mail.google.com/mail/u/0/#inbox", "_blank");
            //$("#btn-verify").prop("disabled", true);
        }

        totalKlik += 1;
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
        $("#btn-verify").prop("disabled", false);
    });
});
