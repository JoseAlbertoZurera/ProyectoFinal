<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use App\Models\ReservaRealizada;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlojamientoController extends Controller
{
    public function __invoke()
    {
        $alojamientos = Alojamiento::where('disponibilidad', 1)->orderBy('created_at', 'desc')->paginate(8);

        return view('alojamientos', compact('alojamientos'));
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
        $request->validate([
            'ruta_imagen' => 'nullable|image'
        ]);

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


        // Guardamos la nueva imagen
        if ($request->hasFile('ruta_imagen')) {
            $imagen = $request->file('ruta_imagen')->store('public/images/alojamientos');
            $url_imagen = Storage::url($imagen);
        }

        
        Alojamiento::create([
            'titulo' => $request['titulo'],
            'ciudad' => $request['ciudad'],
            'codigo_postal' => $request['codigo_postal'],
            'direccion' => $request['direccion'],
            'tipo_alojamiento' => $request['tipo_alojamiento'],
            'fecha_inicio' => $request['fecha_inicio'],
            'fecha_fin' => $request['fecha_fin'],
            'precio_noche' => $request['precio_noche'],
            'disponibilidad' => 1,
            'descripcion' => $request['descripcion'],
            'descripcion_ubicacion' => $request['descripcion_ubicacion'],
            'ruta_imagen' => $url_imagen,
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

        $id = Alojamiento::select('id')->orderBy('id', 'desc')->first();

        return redirect()->route("alojamiento.show", [$id])->with(["alojamientoCreado" => "Alojamiento creado correctamente"]);
    }

    /**
     * Muestra la vista de un alojamiento específico
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alojamiento = Alojamiento::find($id);
        $user = User::find($alojamiento->id_usuario);
        $reservas = ReservaRealizada::where('id_alojamiento', $id)->where('estado', '!=', 'Cancelado')->get();

        return view('alojamiento', compact('alojamiento', 'user', 'reservas'));
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
        return redirect()->route("dashboard")->with(["alojamientoEliminado" => "Alojamiento eliminado correctamente",]);
    }

    public function alojamientosUsuario() {
        $alojamientos = Alojamiento::where('id_usuario', Auth::user()->id)->get();

        return view('misAlojamientos', compact('alojamientos'));
    }
}
