

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

    $('#addImg').on('click', function (e) {
        e.preventDefault();
        console.log('click');
        $('#imgList').append('<div class="col-lg-3">\n' +
            '                                        <div class="form-group">\n' +
            '                                            <label class="control-label">Imagen 2</label>\n' +
            '                                            <input name="imagen[]" type="file" class="form-control">\n' +
            '                                        </div>\n' +
            '                                    </div>')
    });
});


// $("#selectModelo").jCombo({
//     url: "getCities.php",
//     input_param: "id",
//     parent: "#state2",
//     onChange: function(newvalue) {
//         $("#message").text("parent has changed to value " + newvalue)
//             .fadeIn("fast",function() {
//                 $(this).fadeOut(3500);
//             });
//     }
// });