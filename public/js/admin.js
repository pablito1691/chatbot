

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
});
