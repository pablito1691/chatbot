@extends('layouts.app')

@section('content')

    <div id="modalConsulta" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="img-responsive" src="" id="imgPopup" style="max-width: 450px">
                                <p></p>

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
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="confirmConsulta" class="btn btn-primary btn-block" data-dismiss="modal">Enviar Consulta</button>
                </div>
            </div>

        </div>
    </div>

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
              <div class="card card-hover" style="margin-bottom: 20px">
                <img class="card-img-top" style="height: 300px" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}" alt="">
                <div class="card-block">
                  <h4 class="card-title">
                    <a href="/vehiculo/{{$vehiculo->idvehiculos}}"> {{$vehiculo->version->modelo->descripcion.' - '.$vehiculo->version->descripcion}}</a>
                  </h4>
                  <h5>${{$vehiculo->precio}}</h5>
                  <h5>Año: {{$vehiculo->year}} - Km: {{$vehiculo->kilometros}}</h5>
                  <p class="card-text">{{$vehiculo->descripcion}}</p>
                  <a href="#" data-toggle="modal" data-target="#modalConsulta"
                     data-modelo="{{$vehiculo->version->modelo->descripcion.' - '.$vehiculo->version->descripcion}}"
                     data-imagen="{{asset('storage/img/'.$vehiculo->imagen_mini)}}"
                     class="btn btn-primary btn-block">Consulta!</a>
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

    <style>

        .card-hover card
        {
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }
        .card-hover:hover {
            box-shadow: 0px 0px 100px #000000;
            z-index: 1.5;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1.03);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1.03);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1.03);
            transition: all 200ms ease-in;
        }
        .grayscale {
            -webkit-filter: brightness(1.10) grayscale(100%) contrast(90%);
            -moz-filter: brightness(1.10) grayscale(100%) contrast(90%);
            filter: brightness(1.10) grayscale(100%);
        }
    </style>

@endsection

