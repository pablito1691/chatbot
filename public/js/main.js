$(document).ready(function () {
    $('.imagen_mini').on('click', function (e) {
        e.preventDefault();
        $('#imagen').attr('src',this.src);
    });

    $('#modalConsulta').on('show.bs.modal', function (e) {

        $modelo = $(e.relatedTarget).data('modelo');
        $imagen = $(e.relatedTarget).data('imagen');


        $(this).find('.modal-title').text('Consulta sobre '+$modelo);
        $(this).find('#imgPopup').attr('src', $imagen);

        $(this).find('#hiddenVehiculo').val($modelo);



        form = $(e.relatedTarget).closest('form');

        $(this).find('.modal-footer #confirmConsulta').data('form', form);



    });

    $('.imagen_mini').mouseover(function (e){
        e.preventDefault();
        $('.imagen_mini').on('click', function (e) {
            e.preventDefault();
            $('#imagen').attr('src',this.src);
        });

    });


});