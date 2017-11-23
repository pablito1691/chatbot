@extends('layouts.app')

@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <!-- Load the Cloud Zoom CSS file -->
    <link href="/styles/cloud-zoom.css" rel="stylesheet" type="text/css" />

    <!-- You can load the jQuery library from the Google Content Network.
    Probably better than from your own server. -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

    <!-- Load the Cloud Zoom JavaScript file -->
    <script type="text/JavaScript" src="/js/cloud-zoom.1.0.2.js"></script>

</head>
<body>




<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">Fotos</h1>

            @foreach($vehiculo->imagenes as $imagenes)
                <div class="list-group">
                    <a href="#"><img onmouseover="hacerClick()" class="imagen_mini" width="100" height="100" src="{{asset('storage/img/'.$imagenes->ruta)}}"
                                     alt="No se pudo cargar la imagen"></a>
                    <p></p>
                </div>
            @endforeach
        </div>

        <div class="col-lg-9">

            <div class="card mt-4">
                {{--<img width="500" height="300" id="imagen" class="card-img-top img-fluid" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}"--}}
                     {{--alt="No se pudo cargar la imagen">--}}
                <a href='{{asset('storage/img/'.$vehiculo->imagen_mini)}}' class = 'cloud-zoom' id='zoom1'
                   rel="adjustX: 10, adjustY:-4, softFocus:true">
                    <img width="500" height="300" id="imagen" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}" class="card-img-top img-fluid"  alt='' align="left" title="Zoom del auto" />

                <div class="card-body">
                    <h3 class="card-title">{{$vehiculo->version->descripcion}}</h3>
                    <h4>{{$vehiculo->precio}}</h4>
                    <p class="card-text">{{$vehiculo->descripcion}}</p>
                </div>
            </div>

        </div>


    </div>



</div>






<a href='img/bigimage01.jpg' class = 'cloud-zoom' id='zoom1'
   rel="adjustX: 10, adjustY:-4, softFocus:true">
    <img src="img/smallimage-1.jpg" alt='' align="left" title="Zoom del auto" />
</a>



<p>Seleccione la foto para hacerle alto zoom</p>

<!--
        You can optionally create a gallery by creating anchors with a class of 'cloud-zoom-gallery'.
        The anchor's href should point to the big zoom image.
        In the rel attribute you must specify the id of the zoom to use (useZoom: 'zoom1'),
        and also the small image to use (smallImage: /images/....)
        -->

<a href='img/bigimage03.jpg' class='cloud-zoom-gallery' title='Thumbnail 1'
   rel="useZoom: 'zoom3', smallImage: 'img/smallimage-3.jpg' ">
    <img src="img/tinyimage-3.jpg" alt = "Thumbnail 1"/></a>

<a href='img/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2'
   rel="useZoom: 'zoom2', smallImage: ' img/smallimage-1.jpg'">
    <img src="img/tinyimage-1.jpg" alt = "Thumbnail 2"/></a>

<a href='img/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3'
   rel="useZoom: 'zoom1', smallImage: 'img/smallimage-2.jpg' ">
    <img src="img/tinyimage-2.jpg" alt = "Thumbnail 3"/></a>

</body>

<style>

    /* This is the moving lens square underneath the mouse pointer. */
    .cloud-zoom-lens {
        border: 4px solid #888;
        margin:-4px;	/* Set this to minus the border thickness. */
        background-color:#fff;
        cursor:move;
    }

    /* This is for the title text. */
    .cloud-zoom-title {
        font-family:Arial, Helvetica, sans-serif;
        position:absolute !important;
        background-color:#000;
        color:#fff;
        padding:3px;
        width:100%;
        text-align:center;
        font-weight:bold;
        font-size:10px;
        top:0px;
    }

    /* This is the zoom window. */
    .cloud-zoom-big {
        border:4px solid #ccc;
        overflow:hidden;
    }

    /* This is the loading message. */
    .cloud-zoom-loading {
        color:white;
        background:#222;
        padding:3px;
        border:1px solid #000;
    }



</style>



</html>
@endsection
