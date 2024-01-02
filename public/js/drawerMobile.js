$(document).ready(function () {
    $("#jelajahiMobile").click(function () {
        $("#jelajahiMobileContent").slideToggle("fast");
        $("#svgjelajahimobile").toggleClass("rotate-180");
    });
});

$(document).ready(function () {
    $("#kategoriMobile").click(function () {
        $("#kategoriMobileContent").slideToggle("fast");
        $("#svgkategorimobile").toggleClass("rotate-180");
    });
});

$(document).ready(function () {
    $("#pLanguageIndex").click(function () {
        $("#languageIndex").slideToggle("fast");
        $("#svgLanguageIndex").toggleClass("rotate-180");
    });
});
