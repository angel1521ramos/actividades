<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actividad_id')->constrained('actividads')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('semestre');
            $table->string('correo');
            $table->string('telefono');
            $table->string('carrera');
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
        Schema::dropIfExists('alumnos');
    }
}
