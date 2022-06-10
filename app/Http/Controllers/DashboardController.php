<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use App\Models\ReservaRealizada;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Crea una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra el panel de la aplicación.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $alojamientos = Alojamiento::where('id_usuario', Auth::user()->id)->orderBy('created_at', 'desc')->take(5)->get();
        $reservas = ReservaRealizada::where('id_solicitante', Auth::user()->id)->orderBy('created_at', 'desc')->take(5)->get();
        $alojamientosReservados = ReservaRealizada::where('id_usuario', Auth::user()->id)->orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard', compact('alojamientos', 'reservas', 'alojamientosReservados'));
    }
}