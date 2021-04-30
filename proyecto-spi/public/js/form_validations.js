$(document).ready(function(){

    // Validación de elementos

    $(".numTel").on('input', function (e) {
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });

    $('.numTel').on('keydown keyup change', function () {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength > 10) {
            $(this).val(char.substring(0, 10));
        }
    });

    $(".CodPost").on('input', function (e) {
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });

    $('.CodPost').on('keydown keyup change', function () {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength > 5) {
            $(this).val(char.substring(0, 5));
        }
    });

});