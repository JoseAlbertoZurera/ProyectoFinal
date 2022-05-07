<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alojamiento>
 */
class AlojamientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ciudad' => $this->faker->city(),
            'codigo_postal' => $this->faker->postcode(),
            'direccion' => $this->faker->streetAddress(),
            'tipo_alojamiento' => $this->faker->randomElement(['Casa', 'Apartamento', 'Hotel', 'Hostal', 'Resort']),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'precio_noche' => $this->faker->randomNumber(2),
            'disponibilidad' => $this->faker->randomElement([0, 1]),
            'ruta_imagen' => $this->faker->imageUrl(),
            'id_usuario' => User::all()->random()->id
        ];
    }
}
