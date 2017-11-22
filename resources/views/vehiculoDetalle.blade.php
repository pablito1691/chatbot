@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Fotos</h1>

                @foreach($vehiculo->imagenes as $imagenes)
                    <div class="list-group">
                        <a href=""><img class="imagen_mini" onclick="cambiarImagen(this)" width="100" height="100" src="{{asset('storage/img/'.$imagenes->ruta)}}"
                                                                 alt="No se pudo cargar la imagen"></a>
                        <p></p>
                    </div>
                 @endforeach
                <script>
                    function cambiarImagen(imagen) {
                        document.getElementById("imagen").src = imagen.src;
                    }
                </script>

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

    </div>

@endsection
