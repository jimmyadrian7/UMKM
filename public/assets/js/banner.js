$(function () {
    $("#divBanner").click(function () {
        $("#banner").click();
    });

    $("#banner").change(function () {
       $('#submit').click();
    });

    $(".delete-icon-banner").click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            data: event.target.id,
            url: "delBanner/"+event.target.id,
            success:function(data){
                window.location.href = window.location.href;
            },

        });
    });
});