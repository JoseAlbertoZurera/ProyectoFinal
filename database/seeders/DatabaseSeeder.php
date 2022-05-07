<?php

namespace Database\Seeders;

use App\Models\Alojamiento;
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
        $usuario->rol = 'Administrador';
        $usuario->email_verified_at = now();

        $usuario->save();

        User::factory(50)->create();
        Alojamiento::factory(50)->create();
    }
}
