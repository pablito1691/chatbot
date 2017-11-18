<html>

<head>

    <title> Pagina 2</title>

</head>

<script type="text/javascript">
    function redireccionar() {
        window.locationf = "http://www.cristalab.com";
    }
    function ConfirmDemo() {

        var mensaje = confirm("¿Te gusta Desarrollo Geek?");

        if (mensaje) {
            alert("¡Gracias por aceptar!");
            redireccionar();
        }

        else {
            alert("¡Haz denegado el mensaje!");
        }
    }
</script>


<body>

<input type="button" onclick="ConfirmDemo()" value="Click para ver un mensaje de confirmación" />

<div class="card">
    <div class = "card-title">
    HOLA
    </div>
    <img src="img/auto2.jpg" alt="">
</div>

@foreach($vehiculos as $vehiculo)
@if ($vehiculo === reset($vehiculos))
echo "reset($vehiculos)";
@endif

@endforeach

@foreach($vehiculos as $vehiculo)
    @if($loop->index == 0)
echo "Este es la version del primer vehiculo del array" - {{$vehiculo->version->descripcion}};

echo <br/> <br/> {{$vehiculo->descripcion}}
echo <br/> <br/> "ID DEL COLOR: " {{$vehiculo->color->idcolores}}
     <br/> <br/> "NOMBRE COLOR: " {{$vehiculo->color->descripcion}}
    @endif

@endforeach
<?php


$cantidad = count($vehiculos);
echo $cantidad."aqui";



foreach ($vehiculos as $vehiculo){
    if($vehiculo->destacado == 1){
    echo "ESTE VEHICULO ESTA DESTACADO";
    break;
    }
}

?>

@foreach($vehiculos as $vehiculo)
    @if($loop->index == $cantidad)
        echo "Este es la version del Ultimo vehiculo del array" - {{$vehiculo->version->descripcion}};

        echo <br/> <br/> {{$vehiculo->descripcion}}
        echo <br/> <br/> "ID DEL COLOR: " {{$vehiculo->color->idcolores}}
        <br/> <br/> "NOMBRE COLOR: " {{$vehiculo->color->descripcion}}
    @endif

@endforeach
<?php
foreach($vehiculos as $vehiculo){
    if($vehiculo->destacado==1){

        echo "<br/>Aca hay un destacado y es el numero"."-".current($vehiculo)."- del arreglo <br/>";
    }
}
?>

<div class="col-sm-6 col-md-4 col-xs-12 no-padding img-hover">
    <a href="https://www.leonalperovich.com.ar/vehiculos"><img src="img/zocalo_0km.jpg" class="img-responsive"></a>
</div>


</body>
</html>
