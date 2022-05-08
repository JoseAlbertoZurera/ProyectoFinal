<?php

namespace Database\Factories;

use App\Models\User;
use DateTime;
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
        $fechaInicio = $this->faker->dateTimeBetween('now', '+1 years');
        $diferencia = DateTime::createFromFormat('Y-m-d', date("Y-m-d"))->diff($fechaInicio);
        
        $string1 = '+' . strval($diferencia->days + 3) . ' days';
        $string2 = '+' . strval($diferencia->days + 180) . ' days';

        return [
            'ciudad' => $this->faker->city(),
            'codigo_postal' => $this->faker->postcode(),
            'direccion' => $this->faker->streetAddress(),
            'tipo_alojamiento' => $this->faker->randomElement(['Casa', 'Apartamento', 'Hotel', 'Hostal']),
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $this->faker->dateTimeBetween($string1 , $string2),
            'precio_noche' => $this->faker->numberBetween(45, 250),
            'disponibilidad' => $this->faker->randomElement([0, 1]),
            'ruta_imagen' => $this->faker->imageUrl('640', '640', 'Alojamiento'),
            'id_usuario' => User::all()->random()->id
        ];
    }
}
