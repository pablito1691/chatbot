<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>

<body>

<nav class="navbar">
    PANEL DE ADMINISTRACION
</nav>

<div class="container">

    <div class="row">
        <div class="col-lg-2">
            <ul class="list-group">
                <li class="list-group-item"><a href="#">ABM Marcas</a></li>
                <li class="list-group-item"><a href="#">ABM Modelos</a></li>
                <li class="list-group-item"><a href="#">ABM Versiones</a></li>
            </ul>
        </div>
        <div class="col-lg-10">
            <div class="card card-default">
                <div class="card-header">
                    <h3>Carga de vehiculos</h3>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Seleccione la Marca</label>
                                        <select id="selectMarca" class="form-control">
                                            @foreach($marcas as $marca)
                                                <option value="{{$marca->idmarcas}}">{{$marca->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Seleccione el modelo</label>
                                        <select id="selectModelo" class="form-control">
                                            <option>---------</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Seleccione la version</label>
                                        <select id="selectVersion" class="form-control">
                                            <option>---------</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Descripcion</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Kilometros</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Precio</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Año</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <select class="form-control">
                                            @foreach($colores as $color)
                                                <option>{{$color->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Imagen</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block">Agregar Vehiculo</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="http://carlosdeoliveira.net/jcombo/jquery.jCombo.min.js"></script>
<script src="js/admin.js"></script>

</body>

</html>