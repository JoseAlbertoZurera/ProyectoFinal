<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlojamientoController extends Controller
{
    public function __invoke()
    {
        return view('alojamientos');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicarAlojamiento');
    }

    /**
     * Almacena el alojamieto creado en la BBDD y muestra .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect()->route("alojamientos.index")->with(["mensaje" => "Alojamiento creado correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Alojamiento $alojamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Alojamiento $alojamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alojamiento $alojamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alojamiento  $alojamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alojamiento $alojamiento)
    {
        $alojamiento->delete();
        return redirect()->route("dashboard")->with(["mensaje" => "Alojamiento eliminado correctamente",]);
    }
}