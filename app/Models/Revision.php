<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Revision extends Model
{
    protected $table = "contactos";

    protected static function booted()
    {
        //scope para ver los productos que tienen NULL en concesionado
        //Del modelo va a obtener solamente los que estén "NULL" y esos va a mostrar
        //En el controlador (vista index)
        static::addGlobalScope('concesionado', function (Builder $builder) {
            $builder->whereNull('concesionado');
        });
    }
}
