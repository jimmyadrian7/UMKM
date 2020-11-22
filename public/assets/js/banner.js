$(function () {
    $("#divBanner").click(function () {
        $("#banner").click();
    });

    $("#banner").change(function () {
       $('#submit').click();
    });
});