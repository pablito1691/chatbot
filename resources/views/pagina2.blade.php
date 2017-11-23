@extends('layouts.app')

@section('content')
    <script src="jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="jquery.mlens-1.2.min.js"></script>



    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Fotos</h1>

                {{--@foreach($vehiculo->imagenes as $imagenes)--}}
                    {{--<div class="list-group">--}}
                        {{--<a href="#"><img onmouseover="hacerClick()" class="imagen_mini" width="100" height="100" src="{{asset('storage/img/'.$imagenes->ruta)}}"--}}
                                         {{--alt="No se pudo cargar la imagen"></a>--}}
                        {{--<p></p>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}


            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                {{--<div class="card mt-4">--}}
                    {{--<img width="900" height="400" id="imagen" class="card-img-top img-fluid" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}"--}}
                         {{--alt="No se pudo cargar la imagen">--}}
                    {{--<div class="card-body">--}}
                        {{--<h3 class="card-title">{{$vehiculo->version->descripcion}}</h3>--}}
                        {{--<h4>{{$vehiculo->precio}}</h4>--}}
                        {{--<p class="card-text">{{$vehiculo->descripcion}}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- /.card -->

            {{--<div class="card card-outline-secondary my-4">--}}
            {{--<div class="card-header">--}}
            {{--Reseñas--}}
            {{--</div>--}}
            {{--<div class="card-body">--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,--}}
            {{--similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat--}}
            {{--laborum. Sequi mollitia, necessitatibus quae sint natus.</p>--}}
            {{--<small class="text-muted">Posted by Anonymous on 3/1/17</small>--}}
            {{--<hr>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,--}}
            {{--similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat--}}
            {{--laborum. Sequi mollitia, necessitatibus quae sint natus.</p>--}}
            {{--<small class="text-muted">Posted by Anonymous on 3/1/17</small>--}}
            {{--<hr>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,--}}
            {{--similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat--}}
            {{--laborum. Sequi mollitia, necessitatibus quae sint natus.</p>--}}
            {{--<small class="text-muted">Posted by Anonymous on 3/1/17</small>--}}
            {{--<hr>--}}
            {{--<a href="#" class="btn btn-success">Leave a Review</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>

        <p> </p>
        <a href="/" target="_parent" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Ejemplo</a>

        <div id="contenido">
            <img id="img_zoom" src="img/auto1.jpg" alt="Aca esta el auto con zoom" data-big="img/chery_grande.jpg" data-overlay="img/fondo_negro.png" />
        </div>




    </div>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#botella").mlens(
                {
                    imgSrc: $("#botella").attr("data-big"),   // path of the hi-res version of the image
                    lensShape: "circle",                // shape of the lens (circle/square)
                    lensSize: 180,                  // size of the lens (in px)
                    borderSize: 4,                  // size of the lens border (in px)
                    borderColor: "#fff",                // color of the lens border (#hex)
                    borderRadius: 0,                // border radius (optional, only if the shape is square)
                    imgOverlay: $("#botella").attr("data-overlay"), // path of the overlay image (optional)
                    overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
                });
        });
    </script>



    <php
            #contenido {
            position: relative;
            width: 640px;
            height: auto;
            margin: 20px auto;
            border: 12px solid #fff;
            border-radius: 10px;
            box-shadow: 1px 1px 5px rgba(50,50,50 0.5);
            }
    ?/>

@endsection


