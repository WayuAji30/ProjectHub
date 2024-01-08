$(document).ready(function () {
    $(".btn-umum, .btn-dokumen, .btn-rating, .btn-riwayat").on(
        "click",
        function () {
            $(".btn-umum, .btn-dokumen, .btn-rating, .btn-riwayat").removeClass(
                "text-primary-50 border-primary-50"
            );
            $(".btn-umum, .btn-dokumen, .btn-rating, .btn-riwayat").addClass(
                "border-transparent"
            );
            $(this).removeClass("border-transparent");
            $(this).addClass("text-primary-50 border-primary-50");
            $(".umum, .dokumen, .rating, .riwayat").hide();
            var targetClass = $(this)
                .attr("class")
                .split(" ")[0]
                .replace("btn-", "");
            $("." + targetClass).show();
        }
    );

    $(".btn-umum").trigger("click");
});
