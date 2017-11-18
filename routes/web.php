<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Color;
use App\Marca;
use App\Modelo;
use App\Vehiculo;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {

    $vehiculosDestacados = Vehiculo::where('destacado', 1)->get();

    return view('index')
        ->with('vehiculos',Vehiculo::all())
        ->with('vehiculos_destacados', $vehiculosDestacados);
});

Route::get('/admin', function () {
    return view('admin')->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');


Route::resource('vehiculos', 'VehiculosController');


Route::get('getmodelos', function(){
    $id = Input::get('option');
    $marca = Marca::where('idmarcas',$id)->first();
    $modelos = $marca->modelos;
    $array = array();
    foreach ($modelos as $modelo) {
        $array[$modelo->idmodelos] = $modelo->descripcion;
    }
    return $array;
});

Route::get('getversiones', function(){
    $id = Input::get('option');
    $modelo = Modelo::where('idmodelos',$id)->first();
    $versiones = $modelo->versiones;
    $array = array();
    foreach ($versiones as $version) {
        $array[$version->idversiones] = $version->descripcion;
    }
    return $array;
});

Route::get('/vehiculo', function () {

    return view('vehiculo');
});

Route::get('/vehiculo/{id}', function ($id) {

    $vehiculo = Vehiculo::where('idvehiculos',$id)->first();

    return view('vehiculo')->with('vehiculo', $vehiculo);
});

Route::get('/pagina2', function () {
    return view('pagina2')->with('vehiculos',Vehiculo::all());
});

Route::get('/prueba', function () {
    return view('codigosPrueba');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
