<?php

namespace Database\Factories;

use App\Models\Alojamiento;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservaRealizada>
 */
class ReservaRealizadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id_alojamiento = Alojamiento::all()->random()->id;
        $fecha_inicio = Alojamiento::where('id', $id_alojamiento)->value('fecha_inicio');
        $fecha_fin = Alojamiento::where('id', $id_alojamiento)->value('fecha_fin');

        return [
            'id_usuario' => User::all()->random()->id,
            'id_alojamiento' => $id_alojamiento,
            'fecha_entrada' => $fecha_entrada = $this->faker->dateTimeBetween($fecha_inicio, $fecha_fin),
            'fecha_salida' => $this->faker->dateTimeBetween($fecha_entrada, $fecha_fin),
            'estado' => $this->faker->randomElement(['Pendiente de pago', 'Reservado', 'Finalizado', 'Cancelado']),


        ];
    }
}
