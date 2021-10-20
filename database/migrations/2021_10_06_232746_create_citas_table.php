<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('medicamento')->nullable();
            $table->string('padecimiento')->nullable();
            $table->string('terapia')->nullable();
            $table->string('terapia_otro')->nullable();
            $table->enum('ozono', ['si','no'])->nullable();
            $table->enum('acupuntura', ['si','no'])->nullable();
            $table->enum('limpieza_oido', ['si','no'])->nullable();
            $table->enum('mejoria', ['si','no'])->nullable();
            $table->string('mejoria_descripcion')->nullable();
            $table->string('sintoma_inquietud')->nullable();
            $table->string('hora_cita')->nullable();
            $table->integer('sistolica')->nullable();
            $table->integer('diastolica')->nullable();
            $table->foreignId('paciente_id')->references('id')->on('pacientes');
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
        Schema::dropIfExists('citas');
    }
}
