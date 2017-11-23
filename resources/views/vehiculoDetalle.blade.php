@extends('layouts.app')

@section('content')

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
                    <img width="900" height="400" id="imagen" class="card-img-top img-fluid" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}"
                         alt="No se pudo cargar la imagen">
                    <div class="card-body">
                        <h3 class="card-title">{{$vehiculo->version->descripcion}}</h3>
                        <h4>{{$vehiculo->precio}}</h4>
                        <p class="card-text">{{$vehiculo->descripcion}}</p>
                    </div>
                </div>

            </div>


        </div>

        <p> </p>
        <a href="/pagina2" target="_parent" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Ejemplo</a>

    </div>

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
