<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AgUsados</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <!--href vehiculo/id vehiculo-->
      </head>

      <body>

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container" style="padding-bottom: 20px">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" class="img-responsive">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" >About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid" style="background-color: #f7f7f7; margin-top: 20px">

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
                <img class="card-img-top" style="height: 300px" src="{{asset('storage/img/'.$vehiculo->imagen_mini)}}" alt="">
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

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>



        <!-- Bootstrap core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>


</html>