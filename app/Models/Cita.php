<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicamento',
        'padecimiento',
        'terapia',
        'terapia_otro',
        'ozono',
        'acupuntura',
        'limpieza_oido',
        'mejoria',
        'mejoria_descripcion',
        'sintoma_inquietud',
        'hora_cita',
        'sistolica',
        'diastolica',
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
