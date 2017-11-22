$(document).ready(function () {
    $('.imagen_mini').on('click', function (e) {
        e.preventDefault();
        $('#imagen').attr('src',this.src);
    });


    $('.imagen_mini').mouseover(function (e){
        e.preventDefault();
        $('.imagen_mini').on('click', function (e) {
            e.preventDefault();
            $('#imagen').attr('src',this.src);
        });

    });


});