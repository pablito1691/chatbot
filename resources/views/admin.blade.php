@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{url('admin')}}">Agregar vehiculo</a></li>
                <li class="list-group-item"><a href="{{url('admin/bases')}}">Gestion de base</a></li>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Carga de vehiculos</h3>
                </div>
                <div class="card-block">
                    <div class="col-lg-12">
                        <form action="vehiculos" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Seleccione la Marca</label>
                                        <select name="marca" id="selectMarca" class="form-control">
                                            <option>-----Seleccione la marca----</option>
                                            @foreach($marcas as $marca)
                                                <option value="{{$marca->idmarcas}}">{{$marca->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Seleccione el modelo</label>
                                        <select name="modelo" id="selectModelo" class="form-control">
                                            <option>---------</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Seleccione la version</label>
                                        <select name="version" id="selectVersion" class="form-control">
                                            <option>---------</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Descripcion</label>
                                        <textarea name="descripcion" maxlength="150" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Kilometros</label>
                                        <input name="kilometros" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Precio</label>
                                        <input name="precio" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Año</label>
                                        <input name="year" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <select name="color" class="form-control">
                                            @foreach($colores as $color)
                                                <option value="{{$color->idcolores}}">{{$color->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label">Imagen Mini</label>
                                        <input name="imagen_mini" type="file" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Imagen 1</label>
                                            <input name="imagen[]" type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Imagen 2</label>
                                            <input name="imagen[]" type="file" class="form-control">
                                        </div>
                                    </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Imagen 3</label>
                                        <input name="imagen[]" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Imagen 4</label>
                                        <input name="imagen[]" type="file" class="form-control">
                                    </div>
                                </div>

                                {{csrf_field()}}
                                <button class="btn btn-primary btn-block">Agregar Vehiculo</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
