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
        $string2 = '+' . strval($diferencia->days + 90) . ' days';

        $tipo_alojamiento = $this->faker->randomElement(['Casa', 'Apartamento', 'Hotel', 'Hostal']);

        return [
            'titulo' => $tipo_alojamiento . ' ' . $this->faker->words(2, true),
            'ciudad' => $this->faker->randomElement(['Córdoba', 'Málaga', 'Cádiz', 'Sevilla']),
            'codigo_postal' => $this->faker->postcode(),
            'direccion' => $this->faker->streetAddress(),
            'tipo_alojamiento' => $tipo_alojamiento,
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $this->faker->dateTimeBetween($string1 , $string2),
            'precio_noche' => $this->faker->numberBetween(45, 250),
            'disponibilidad' => $this->faker->randomElement([0, 1]),
            'descripcion' => $this->faker->text(700),
            'descripcion_ubicacion' => $this->faker->text(650),
            'ruta_imagen' => $this->faker->imageUrl('640', '640', 'Alojamiento'),
            'wifi' => $this->faker->randomElement([0, 1]),
            'playa' => $this->faker->randomElement([0, 1]),
            'limpieza' => $this->faker->randomElement([0, 1]),
            'mascotas' => $this->faker->randomElement([0, 1]),
            'estacionamiento' => $this->faker->randomElement([0, 1]),
            'aire_acondicionado' => $this->faker->randomElement([0, 1]),
            'habitaciones' => $this->faker->numberBetween(1, 10),
            'max_personas' => $this->faker->randomElement([1, 10]),
            'id_usuario' => User::all()->random()->id
        ];
    }
}
