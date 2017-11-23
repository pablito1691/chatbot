

$(document).ready(function(){


    $('#selectMarca').change(function(){
        $.get(
            { url: 'getmodelos'},
            { option: $(this).val()},
            function(data) {
                $('#selectModelo').empty();
                $('#selectModelo').append("<option>----Seleccione el modelo-----</option>");
                $.each(data, function(key, element) {
                    $('#selectModelo').append("<option value='" + key + "'>" + element + "</option>");
                });
            });
    });

    $('#selectModelo').change(function(){
        $.get(
            { url: 'getversiones'},
            { option: $(this).val()},
            function(data) {
                $('#selectVersion').empty();
                $('#selectVersion').append("<option>-----Seleccione la version----</option>");
                $.each(data, function(key, element) {
                    $('#selectVersion').append("<option value='" + key + "'>" + element + "</option>");
                });
            });
    });

    $('#selectMarcaABM').change(function(){
        $('#inputModeloABM').removeAttr('disabled');
        $.get(
            { url: '/getmodelos'},
            { option: $(this).val()},
            function(data) {
                $('#tableModelosBody').empty();
                $('#selectModeloABM').empty();
                $('#selectModeloABM').append("<option>----Seleccione el modelo-----</option>");
                $.each(data, function(key, element) {
                    $('#tableModelosBody').append("<tr><td>" + key + "</td><td>" + element + "</td></tr>");
                    $('#selectModeloABM').append("<option value='" + key + "'>" + element + "</option>");
                });
            });
    });

    $('#selectModeloABM').change(function(){
        $('#inputVersionABM').removeAttr('disabled');
        $.get(
            { url: '/getversiones'},
            { option: $(this).val()},
            function(data) {
                $('#tableVersionesBody').empty();
                $.each(data, function(key, element) {
                    $('#tableVersionesBody').append("<tr><td>" + key + "</td><td>" + element + "</td></tr>");
                });
            });
    });



});
