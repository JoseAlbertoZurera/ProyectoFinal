<?php

namespace App\Http\Controllers;

use App\Models\Alojamiento;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $alojamientos = Alojamiento::where('disponibilidad', 1)->orderBy('created_at', 'desc')->take(4)->get();

        return view('home', compact('alojamientos'));
    }
}
