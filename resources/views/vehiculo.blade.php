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
    <div class="container">
        <a class="navbar-brand" href="#">AgUsados</a>
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
<div class="container-fluid" style="background-color: #f7f7f7">

    <div class="row">

        <div class="col-lg-3">
            <!-- foreach($conjunto as $variable)
             {
             // operar con la variable;
             }-->
            <h3 class="my-4">Seleccione lo que esta buscando</h3>
            <div class="list-group">
                <a href="#" class="list-group-item">Usados</a>
                <a href="#" class="list-group-item">0 KM </a>
                <a href="#" class="list-group-item"> Vendidos</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="card">
                <div class="card-header"><h1>{{$vehiculo->version->modelo->descripcion}}{{$vehiculo->version->descripcion}}</h1></div>
                <div class="card-block">
                    <h4 class="card-title">
                        <a href="/pagina2"> {{$vehiculo->version->modelo->descripcion.' - '.$vehiculo->version->descripcion}}</a>
                    </h4>
                    <h5>${{$vehiculo->precio}}</h5>
                    <h5>Año: {{$vehiculo->year}} - Km: {{$vehiculo->kilometros}}</h5>
                    <p class="card-text">{{$vehiculo->descripcion}}</p>
                    <a href="#" class="btn btn-primary btn-block">Consulta!</a>
                </div>



            </div>

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