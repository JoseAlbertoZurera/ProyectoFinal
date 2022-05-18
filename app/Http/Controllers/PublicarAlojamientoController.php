<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicarAlojamientoController extends Controller
{
    public function __invoke()
    {
        return view('publicarAlojamiento');
    }

    protected function store(Request $request)
    {

        if ($request['wifi']) {
            $wifi = $request['wifi'];
        } else {
            $wifi = 0;
        }

        if ($request['playa']) {
            $playa = $request['playa'];
        } else {
            $playa = 0;
        }

        if ($request['limpieza']) {
            $limpieza = $request['limpieza'];
        } else {
            $limpieza = 0;
        }

        if ($request['mascotas']) {
            $mascotas = $request['mascotas'];
        } else {
            $mascotas = 0;
        }

        if ($request['estacionamiento']) {
            $estacionamiento = $request['estacionamiento'];
        } else {
            $estacionamiento = 0;
        }

        if ($request['aire_acondicionado']) {
            $aire_acondicionado = $request['aire_acondicionado'];
        } else {
            $aire_acondicionado = 0;
        }


        Alojamiento::create([
            'ciudad' => $request['ciudad'],
            'codigo_postal' => $request['codigo_postal'],
            'direccion' => $request['direccion'],
            'tipo_alojamiento' => $request['tipo_alojamiento'],
            'fecha_inicio' => $request['fecha_inicio'],
            'fecha_fin' => $request['fecha_fin'],
            'precio_noche' => $request['precio_noche'],
            'disponibilidad' => 1,
            'descripcion' => $request['descripcion'],
            'ruta_imagen' => $request['ruta_imagen'],
            'wifi' => $wifi,
            'playa' => $playa,
            'limpieza' => $limpieza,
            'mascotas' => $mascotas,
            'estacionamiento' => $estacionamiento,
            'aire_acondicionado' => $aire_acondicionado,
            'habitaciones' => $request['habitaciones'],
            'max_personas' => $request['max_personas'],
            'id_usuario' => Auth::id()
        ]);
        return redirect('/lista');
    }
}
