<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bombero extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'dpi',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'estaciones_id',
        'rangos_id',
    ];
}
