<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">lis

</head>

<body>

<nav class="navbar">
    Probando autos usados :-)
</nav>

<div class="container">

    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label class="control-label">Seleccione la Marca</label>
                            <select>
                                @foreach($marcas as $marca)
                                    <option>{{$marca->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

</html>