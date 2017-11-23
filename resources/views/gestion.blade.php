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
                        <h3>Administracion de Marcas - modelos - versiones</h3>
                    </div>
                    <div class="card-block">
                        <div class="col-lg-12">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Marcas</h2>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Descripcion</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($marcas as $marca)
                                            <tr>
                                                <td>{{$marca->idmarcas}}</td>
                                                <td>{{$marca->descripcion}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <form action="marcas" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="control-label">Agregar Marca</label>
                                            <input name="marca" class="form-control">
                                        </div>
                                        <button class="btn btn-primary">Agregar</button>
                                        {{csrf_field()}}
                                    </form>
                                </div>

                                <div class="col-lg-12">
                                    <h2>Modelos</h2>
                                </div>
                                <div class="col-lg-6">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Descripcion</td>
                                        </tr>
                                        </thead>
                                        <tbody id="tableModelosBody">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <form action="admin/marcas" method="post">
                                        <div class="form-group">
                                            <label class="control-label">Seleccione la marca a la que quiere agregar el
                                                modelo</label>
                                            <select name="version" id="selectMarcaABM" class="form-control">
                                                <option value="0">----Seleccione una marca----</option>
                                                @foreach($marcas as $marca)
                                                    <option value="{{$marca->idmarcas}}">{{$marca->descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Agregar Modelo</label>
                                            <input disabled id="inputModeloABM" name="modelo" class="form-control">
                                        </div>
                                        <button class="btn btn-primary">Agregar</button>
                                    </form>
                                </div>

                                <div class="col-lg-12">
                                    <h2>Versiones</h2>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Descripcion</td>
                                        </tr>
                                        </thead>
                                        <tbody id="tableVersionesBody">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <form action="vehiculos" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="control-label">Seleccione el modelo al que quiere agregar la
                                                version</label>
                                            <select name="version" id="selectModeloABM" class="form-control">
                                                <option value="0">----Seleccione un Modelo----</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Agregar Version</label>
                                            <input disabled id="inputVersionABM" name="version" class="form-control">
                                        </div>
                                        <button class="btn btn-primary">Agregar</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
