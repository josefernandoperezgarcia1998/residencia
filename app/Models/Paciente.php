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

    /* 
        Relación hasMany 
        de paciente => a citas
        Un paciente tiene muchas citas
    */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita','id','categoria_id');
    }
}
