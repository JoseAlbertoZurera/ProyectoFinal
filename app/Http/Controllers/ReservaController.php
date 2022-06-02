<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use App\Models\ReservaRealizada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Alojamiento $alojamiento)
    {
        $fecha = explode(' to ', $request['fecha']);

        ReservaRealizada::create([
            'id_usuario' => Auth::id(),
            'id_alojamiento' => $alojamiento->id,
            'fecha_entrada' => $fecha[0],
            'fecha_salida' => $fecha[1],
            'hora_entrada' => $request['hora'],
            'estado' => 'Pendiente de pago'
        ]);
        return redirect()->route("dashboard")->with(["reservaRealizada" => "Reserva realizada correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReservaRealizada  $reservaRealizada
     * @return \Illuminate\Http\Response
     */
    public function show(ReservaRealizada $reservaRealizada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReservaRealizada  $reservaRealizada
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservaRealizada $reservaRealizada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReservaRealizada  $reservaRealizada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservaRealizada $reservaRealizada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReservaRealizada  $reservaRealizada
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservaRealizada $reservaRealizada)
    {
        $reservaRealizada->delete();
        return redirect()->route("dashboard")->with(["mensaje" => "Reserva eliminada correctamente",]);
    }
}
