<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario();

        $usuario->nombre = 'admin';
        $usuario->apellidos = NULL;
        $usuario->fecha_nacimiento = NULL;
        $usuario->dni = '123456789';
        $usuario->email = 'admin@admin.com';
        $usuario->password = 'admin';
        $usuario->telefono = NULL;
        $usuario->rol = 'Administrador';


        $usuario->save();
    }
}
