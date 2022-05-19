<?php

namespace App\Http\Controllers;

use App\Models\ReservaRealizada;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
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
