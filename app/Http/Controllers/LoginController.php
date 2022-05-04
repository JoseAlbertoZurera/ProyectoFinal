<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->dni = $request->dni;
        $usuario->email = $request->email;
        $usuario->password = $request->password ;
        $usuario->telefono = $request->telefono;
        $usuario->rol = 'Normal';

        $usuario->save();

        return $request;
    }

    public function authenticate(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return $credenciales;
        } else {
            return back()->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }
    }
}
