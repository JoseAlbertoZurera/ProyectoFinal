<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaRealizada extends Model
{
    use HasFactory;
    protected $table = 'reservas_realizadas';

    protected $fillable = [
        'id_usuario',
        'id_solicitante',
        'id_alojamiento',
        'fecha_entrada',
        'fecha_salida',
        'hora_entrada',
        'estado',
        'titulo',
        'ciudad',
        'direccion',
        'precio_noche'
    ];
}
