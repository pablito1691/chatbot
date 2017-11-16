<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

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
        <a class="navbar-brand" href="#">Bienvenido</a>
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
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <!-- foreach($conjunto as $variable)
           {
           // operar con la variable;
           }-->
           <h1 class="my-4">AG USADOS</h1>
           <div class="list-group">
             <a href="#" class="list-group-item">Usados</a>
             <a href="#" class="list-group-item">0 KM </a>
             <a href="#" class="list-group-item"> Vendidos</a>
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
              <div class="carousel-item active">
                <a href="/pagina2"> <img width="900" height="350" src="img/destacados1.jpg" alt="First slide"> </a>
              </div>
              <div class="carousel-item">
                <a href="/prueba"> <img width="900" height="350" src="img/destacados2.jpg" alt="Second slide"> </a>
              </div>
              <div class="carousel-item">
                <a href=""> <img width="900" height="350" src="img/destacados3.jpg" alt="Third slide"></a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="card">
                <a href="http://127.0.0.1:8000/img/auto1.jpg"><img width="253" height="200" src="img/auto1.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Nombre Auto 1</a>
                  </h4>
                  <h5>$Precio 1</h5>
                  <p class="card-text">Auto para vender</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="http://127.0.0.1:8000/img/auto2.jpg"><img width="253" height="200" src="/img/auto2.jpg" alt=""></a>
                <div class="card-body">

                  <h4 class="card-title">
                    <a href="#">Nombre auto 2</a>
                  </h4>
                  <h5>$Precio 2</h5>
                  <p class="card-text">Descripción</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="http://127.0.0.1:8000/img/auto3.jpg"><img width="253" height="200" src="img/auto3.jpg" alt="Problema al cargar la foto"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Nombre auto 3</a>
                  </h4>
                  <h5>$Precio 3</h5>
                  <p class="card-text">Descripcion del tercer auto</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="http://127.0.0.1:8000/img/auto4.jpg"><img class="card-img-top" src="img/auto4.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Auto 4</a>
                  </h4>
                  <h5>$precio 4</h5>
                  <p class="card-text">Descripcion 4</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="http://127.0.0.1:8000/img/auto5.jpg"><img width="253" height="200" src="img/auto5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Auto 5</a>
                  </h4>
                  <h5>$Precio 5</h5>
                  <p class="card-text">Descripcion 5</p>
                </div>
                <div class="card-footer">
                  <progress value="70" max="100">70 %</progress>
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a onclick="alert('Click sobre la imagen del auto numero' + ' 6')"><img width="253" height="200" src="img/auto6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Auto 6</a>
                  </h4>
                  <h5>$Precio 6</h5>
                  <p class="card-text">Decripcion 6</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

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
