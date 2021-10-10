<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->enum('estado_civil', ['Casado/a','Divorciado/a','Viudo/a','Union_libre']);
            $table->string('telefono_casa')->unique()->nullable();
            $table->string('telefono_celular')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->float('peso');
            $table->enum('talla', ['XS','S','M','L','XL']);
            $table->integer('sistolica')->nullable();
            $table->integer('diastolica')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
