<?php

namespace Database\Seeders;

use App\Models\Alojamiento;
use App\Models\ReservaRealizada;
use App\Models\User;
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
        $usuario = new User();

        $usuario->nombre = 'admin';
        $usuario->apellidos = NULL;
        $usuario->fecha_nacimiento = NULL;
        $usuario->dni = NULL;
        $usuario->email = 'admin@admin.com';
        $usuario->password = 'password';
        $usuario->telefono = NULL;
        $usuario->ruta_imagen = 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';
        $usuario->rol = 'Administrador';
        $usuario->email_verified_at = now();

        $usuario->save();

        User::factory(50)->create();
        Alojamiento::factory(50)->create();
        ReservaRealizada::factory(20)->create();
    }
}
