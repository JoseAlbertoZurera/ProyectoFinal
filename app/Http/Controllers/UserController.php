<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Muestra una vista con los datos del usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('perfil', compact('user'));
    }

    /**
     * Muestra el formulario para editar el usuario especificado.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('editarPerfil', compact('user'));
    }

    /**
     * Actualiza el usuario especificado en la BBDD.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'ruta_imagen' => 'nullable|image'
        ]);

        // Eliminamos la imagen anterior
        if ($request->hasFile('ruta_imagen') && $user->ruta_imagen != null) {
            $url = str_replace('storage', 'public', $user->ruta_imagen);
            Storage::delete($url);
        }

        // Guardamos la nueva imagen
        if ($request->hasFile('ruta_imagen')) {
            $imagen = $request->file('ruta_imagen')->store('public/images/users');
            $url = Storage::url($imagen);
            $request['ruta_imagen'] = $url;
        }

        $user->fill($request->input())->saveOrFail();
        return redirect()->route("perfil.index", [Auth::user()->nombre])->with(["mensaje" => "Usuario actualizado"]);
    }

    /**
     * Elimina el usuario especificado de la BBDD.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route("home")->with(["mensaje" => "Usuario eliminado correctamente",]);
    }
}
