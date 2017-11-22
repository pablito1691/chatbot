@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container-fluid" style="background-color: #f7f7f7">

      <div class="row">

        <div class="col-lg-3">
          <!-- foreach($conjunto as $variable)
           {
           // operar con la variable;
           }-->
           <h3 class="my-4">Marcas</h3>
           <div class="list-group">
               @foreach($marcas as $marca)
                   <a href="/{{$marca->idmarcas}}/vehiculos" class="list-group-item">{{$marca->descripcion}} ({{count($marca->modelos)}})</a>
               @endforeach
           </div>

            <h3 class="my-4">Modelos</h3>
           <div class="list-group">
               @foreach($modelos as $modelo)
                   <a href="/{{$modelo->idmodelos}}/{{$modelo->marca->idmarcas}}/vehiculos" class="list-group-item">{{$modelo->descripcion}}</a>
               @endforeach
           </div>

         </div>
         <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <!-- foreach($conjunto as $variable)
           {
           // operar con la variable;
           }-->

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner" role="listbox">
                    @foreach($vehiculos_destacados as $vehiculo)


                        @if($loop->index == 0)

                            <div class="item active" style="background-image: url({{asset('storage/img/'.$vehiculo->imagen_mini)}})">
                            </div>

                        @else

                            <div class="item" style="background-image: url({{asset('storage/img/'.$vehiculo->imagen_mini)}})">
                            </div>
                        @endif
                    @endforeach




                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row">


            {{--CARDS DE LOS AUTOS--}}

            @foreach($vehiculos as $vehiculo)

            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img class="card-img-top img-mini" style="height: 300px" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}" alt="">
                <div class="card-block">
                  <h4 class="card-title">
                    <a href="/vehiculo/{{$vehiculo->idvehiculos}}"> {{$vehiculo->version->modelo->descripcion.' - '.$vehiculo->version->descripcion}}</a>
                  </h4>
                  <h5>${{$vehiculo->precio}}</h5>
                  <h5>Año: {{$vehiculo->year}} - Km: {{$vehiculo->kilometros}}</h5>
                  <p class="card-text">{{$vehiculo->descripcion}}</p>
                  <a href="#" class="btn btn-primary btn-block">Consulta!</a>
                </div>
                {{--<div class="card-footer">--}}
                  {{--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>--}}
                {{--</div>--}}



              </div>
            </div>
            @endforeach



          </div>
          <!-- /.row -->
            {{--{{$vehiculos->links()}}--}}

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection

