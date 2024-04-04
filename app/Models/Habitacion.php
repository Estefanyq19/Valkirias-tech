<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = "habitaciones";
    protected $fillable=array(
        'disponibilidad_id',
        'tipo_habitaciones_id',
        'foto_id',
        'no_habitaciones'
    );
}
