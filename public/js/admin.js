

$(document).ready(function(){
    $('#selectMarca').change(function(){
        $.get({ url: 'getmarcas'},
            { option: $(this).val() },
            function(data) {
                $('#selectModelo').empty();
                $.each(data, function(key, element) {
                    $('#selectModelo').append("<option value='" + key + "'>" + element + "</option>");
                });
            });
    });
});


$("#selectModelo").jCombo({
    url: "getCities.php",
    input_param: "id",
    parent: "#state2",
    onChange: function(newvalue) {
        $("#message").text("parent has changed to value " + newvalue)
            .fadeIn("fast",function() {
                $(this).fadeOut(3500);
            });
    }
});