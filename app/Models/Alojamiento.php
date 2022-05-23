<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ciudad',
        'codigo_postal',
        'direccion',
        'tipo_alojamiento',
        'fecha_inicio',
        'fecha_fin',
        'precio_noche',
        'disponibilidad',
        'descripcion',
        'descripcion_ubicacion',
        'ruta_imagen',
        'wifi',
        'playa',
        'limpieza',
        'mascotas',
        'estacionamiento',
        'aire_acondicionado',
        'habitaciones',
        'max_personas',
        'id_usuario'
    ];
}
