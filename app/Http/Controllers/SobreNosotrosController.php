<?php

namespace App\Http\Controllers;


class SobreNosotrosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('sobreNosotros');
    }
}
