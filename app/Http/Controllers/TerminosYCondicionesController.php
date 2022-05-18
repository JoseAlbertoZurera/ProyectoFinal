<?php

namespace App\Http\Controllers;


class TerminosYCondicionesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('terminosYCondiciones');
    }
}
