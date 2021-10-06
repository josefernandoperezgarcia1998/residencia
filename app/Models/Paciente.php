<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    /* Carga masiva de las columnas en la tabla Paciente */
    protected $fillable = [
        'nombre',
        'a_paterno',
        'a_materno',
        'edad',
        'estado_civil',
        'telefono_casa',
        'telefono_celular',
        'email',
        'peso',
        'talla',
        'sistolica',
        'diastolica',
    ];
}
