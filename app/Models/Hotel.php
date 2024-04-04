<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = "hotel";
    protected $fillable=array(
        'municipio_id',
        'habitaciones_id',
        'foto_id',
        'nombre',
        'contacto',
        'email',
        'whatsApp',
        'direccion',
        'encargado'
    );
}
