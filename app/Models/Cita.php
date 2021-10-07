<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicamento',
        'padicimiento',
        'terapia',
        'terapia_otro',
        'ozono',
        'acupuntura',
        'limpieza_oido',
        'mejoria',
        'mejoria_descripcion',
        'hora_cita',
        'paciente_id',
    ];

    /* 
        Relación hasMany (inversa)/ pertenece 
        de cita => a paciente
        Una cita pertenece a un paciente 
    */
    public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente');
    }

}
