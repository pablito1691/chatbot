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
use App\Vehiculo;

Route::get('/', function () {
    return view('index')->with('vehiculos',Vehiculo::all());
});

Route::get('/admin', function () {
    return view('admin')->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');

Route::get('/vehiculo/{$id}', function ($id) {

    $vehiculo = Vehiculo::where('idvehiculos',$id);

    return view('vehiculo')->with('vehiculo', $vehiculo);
});

Route::get('/vehiculos', function () {
    return view('vehiculos')->with('vehiculos', Vehiculo::all());
});

Route::get('/pagina2', function () {
    return view('pagina2');
});

Route::get('/prueba', function () {
    return view('codigosPrueba');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
