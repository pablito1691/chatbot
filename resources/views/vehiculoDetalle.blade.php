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
        <a href="/{{$vehiculo->idvehiculos}}" target="_parent" onclick="window.open(this.href,this.target,'width=400,height=150,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Ejemplo</a>

    </div>

@endsection
