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
use App\Version;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {

    $vehiculosDestacados = Vehiculo::where('destacado', 1)->get();

    $vehiculos = Vehiculo::paginate(12);

    return view('index')
        ->with('vehiculos', $vehiculos)
        ->with('vehiculos_destacados', $vehiculosDestacados)
        ->with('marcas', Marca::all())
        ->with('modelos', Modelo::all());
});

Route::get('/admin', function () {
    return view('admin')->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');

Route::get('/admin/bases', function () {
    return view('gestion')
        ->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');

Route::post('/admin/marcas', function (Request $request) {

    $marca = new Marca();
    $marca->descripcion = $request->get('marca');

    $marca->save();

    return view('gestion')
        ->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');

Route::post('/admin/modelos', function (Request $request) {

    $modelo = new Modelo();
    $modelo->descripcion = $request->get('modelo');

    $modelo->marcas_idmarcas = $request->get('marca');

    $modelo->save();

    return view('gestion')
        ->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');

Route::post('/admin/versiones', function (Request $request) {

    $version = new Version();
    $version->descripcion = $request->get('version');

    $version->modelos_idmodelos = $request->get('modelo');

    $version->save();

    return view('gestion')
        ->with('marcas', Marca::all())
        ->with('colores', Color::all());
})->middleware('auth');


Route::resource('vehiculos', 'VehiculosController');

Route::get('{marca}/vehiculos', function ($marca) {
    $vehiculos = array();

    $marca = Marca::where('idmarcas', $marca)->first();
    $modelos = $marca->modelos;
    foreach ($modelos as $modelo) {
        foreach ($modelo->versiones as $version) {
            foreach ($version->vehiculos as $vehiculo) {
                array_push($vehiculos, $vehiculo);
            }
        }
    }

    $marcas = array();
    array_push($marcas, $marca);

    $vehiculosDestacados = Vehiculo::where('destacado', 1)->get();

    return view('index')
        ->with('vehiculos', $vehiculos)
        ->with('vehiculos_destacados', $vehiculosDestacados)
        ->with('marcas', $marcas)
        ->with('modelos', $modelos);
});
Route::get('{marca}/{modelo}/vehiculos', function ($marca, $modelo) {
    $vehiculos = array();

    $marca = Marca::where('idmarcas', $marca)->first();
    $modelo = Modelo::where('idmodelos', $modelo)->first();
    foreach ($modelo->versiones as $version) {
        foreach ($version->vehiculos as $vehiculo) {
            array_push($vehiculos, $vehiculo);
        }
    }

    $marcas = array();
    $modelos = array();
    array_push($marcas, $marca);
    array_push($modelos, $modelo);

    $vehiculosDestacados = Vehiculo::where('destacado', 1)->get();

    return view('index')
        ->with('vehiculos', $vehiculos)
        ->with('vehiculos_destacados', $vehiculosDestacados)
        ->with('marcas', $marcas)
        ->with('modelos', $modelos);
});


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

    return view('vehiculo')->with('vehiculos', Vehiculo::all());
});

Route::get('/vehiculo/{id}', function ($id) {

    $vehiculo = Vehiculo::where('idvehiculos',$id)->first();

    return view('pagina2')->with('vehiculo', $vehiculo);
});




Route::get('/prueba', function () {
    return view('codigosPrueba');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

