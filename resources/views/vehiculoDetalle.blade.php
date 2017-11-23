@extends('layouts.app')
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


            <!-- /.col-lg-3 -->

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
        <a href="/pagina2" target="_parent" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Ejemplo</a>

    </div>
@endsection
