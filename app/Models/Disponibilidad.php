<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    use HasFactory;
    protected $table = "disponibilidad";
    protected $fillable=array(
        'fecha_inicio',
        'fecha_salida'
    );
}