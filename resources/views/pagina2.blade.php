@extends('layouts.app')

@section('content')
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <!-- Load the Cloud Zoom CSS file -->
    <link href="/styles/cloud-zoom.css" rel="stylesheet" type="text/css"/>

    <!-- You can load the jQuery library from the Google Content Network.
    Probably better than from your own server. -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

    <!-- Load the Cloud Zoom JavaScript file -->
    <script type="text/JavaScript" src="/js/cloud-zoom.1.0.2.js"></script>

</head>
<body>

<div class="container-fluid" style="margin-right: 10%; margin-left: 10%">


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h2>{{$vehiculo->version->modelo->marca->descripcion}} {{$vehiculo->version->modelo->descripcion}} - {{$vehiculo->version->descripcion}} - {{$vehiculo->year}}</h2>
                </div>
                <div class="card-block">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Fotos</h2>
                                    </div>
                                    <div class="card-block">
                                        <ul class="list-group list-group-flush">
                                            @foreach($vehiculo->imagenes as $imagenes)
                                                <li class="list-group-item">
                                                    <a href='{{asset('storage/img/'.$imagenes->ruta)}}'
                                                       class='cloud-zoom-gallery'
                                                       title='Thumbnail 1'
                                                       rel="useZoom: 'zoom1', smallImage: '{{asset('storage/img/'.$imagenes->ruta)}}' ">
                                                        <img onmouseover="hacerClick()"
                                                             class="imagen_mini img-responsive" style="max-width: 100%"
                                                             src="{{asset('storage/img/'.$imagenes->ruta)}}"
                                                             alt="Thumbnail 1"/></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">

                                <div class="card">
                                    <a href='{{asset('storage/img/'.$vehiculo->imagen_mini)}}' class='cloud-zoom'
                                       id='zoom1'
                                       rel="adjustX: 10, adjustY:-4, softFocus:true">
                                        <img id="imagen"
                                             src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}"
                                             class="card-img-top img-fluid" alt='' align="left" title="Zoom del auto"/>
                                    </a>

                                    <div class="card-block">
                                        <h3 class="card-title">{{$vehiculo->version->modelo->marca->descripcion}} {{$vehiculo->version->modelo->descripcion}} - {{$vehiculo->version->descripcion}} - {{$vehiculo->year}}</h3>
                                        <h4>Precio ${{$vehiculo->precio}}</h4>
                                        <h4>Kilometros: {{$vehiculo->kilometros}}</h4>
                                        <p class="card-text">{{$vehiculo->descripcion}}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Formulario de contacto</h4>
                                    </div>
                                    <div class="card-block">
                                        <form id="consultaForm" action="{{url('admin/consultas')}}" method="POST" enctype="multipart/form-data">
                                            <div class="form-group" id="formNombre">
                                                <input class="form-control" type="text" name="nombre" id="inputNombre" placeholder="Nombre*">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group" id="formEmail">
                                                    <input class="form-control" type="email" name="email" id="inputEmail" placeholder="Email*">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group" id="formTelefono">
                                                    <input class="form-control" type="text" name="telefono" id="inputTelefono" placeholder="Telefono*">
                                                </div>
                                            </div>
                                            <div class="form-group" id="formMensaje">
                                        <textarea name="mensaje" id="textMensaje" class="form-control"
                                                  maxlength="499"rows="4" placeholder="Mensaje*"></textarea>
                                            </div>

                                            <input type="hidden" id="hiddenVehiculo" name="vehiculo">

                                            {{ csrf_field() }}
                                            <button class="btn btn-primary btn-block">Enviar tu consulta</button>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Ficha técnica</h2>
                                    </div>
                                    <div class="card-block">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </div>


</div>


</body>

<style>

    /* This is the moving lens square underneath the mouse pointer. */
    .cloud-zoom-lens {
        border: 4px solid #888;
        margin: -4px; /* Set this to minus the border thickness. */
        background-color: #fff;
        cursor: move;
    }

    /* This is for the title text. */
    .cloud-zoom-title {
        font-family: Arial, Helvetica, sans-serif;
        position: absolute !important;
        background-color: #000;
        color: #fff;
        padding: 3px;
        width: 100%;
        text-align: center;
        font-weight: bold;
        font-size: 10px;
        top: 0px;
    }

    /* This is the zoom window. */
    .cloud-zoom-big {
        border: 4px solid #ccc;
        overflow: hidden;
    }

    /* This is the loading message. */
    .cloud-zoom-loading {
        color: white;
        background: #222;
        padding: 3px;
        border: 1px solid #000;
    }


</style>


</html>
@endsection
