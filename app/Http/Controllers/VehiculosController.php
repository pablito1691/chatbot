<?php

namespace App\Http\Controllers;

use App\Color;
use App\Imagen;
use App\Vehiculo;
use App\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculosController extends Controller
{


    public function store(Request $request)
    {

//        $this->validate($request, [
//            'marca' => 'required',
//            'modelo' => 'required',
//            'imagen' => 'required|image',
//        ]);

        $vehiculo = new Vehiculo();
        $imagen = new Imagen();
        $nombreImagen = '';

        if ($request->hasFile('imagen')) {
            if($request->file('imagen')->isValid()) {
                $request_imagen = $request->file('imagen');
                $nombreImagen = $request_imagen->hashName();
                Storage::disk('public')->put('img', $request_imagen);
                $vehiculo->imagen_mini = $nombreImagen;
            }
        }

        $imagen->ruta = $nombreImagen;


        $vehiculo->versiones_idversiones = $request->get('version');
        $vehiculo->precio = $request->get('precio');
        $vehiculo->descripcion = $request->get('descripcion');
        $vehiculo->year = $request->get('year');
        $vehiculo->kilometros = $request->get('kilometros');
        $vehiculo->colores_idcolores = $request->get('color');

        $vehiculo->save();

        $imagen->vehiculos_idvehiculos = $vehiculo->idvehiculos;
//        $imagen->save();

        return back();

    }

}
