<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesores', function (Blueprint $table) {
            $table->increments('idProfesor');
            $table->string('nombres',30);
            $table->string('apellidoPaterno',30);
            $table->string('apellidoMaterno',30);
            $table->integer('idArteMarcial')->unsigned();
            $table->foreign('idArteMarcial')->references('idArteMarcial')->on('ArtesMarciales');
            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')->references('idAlumno')->on('Alumnos');
            $table->integer('idSeminario')->unsigned();
            $table->foreign('idSeminario')->references('idSeminario')->on('Seminarios');
            $table->integer('idExamen')->unsigned();
            $table->foreign('idExamen')->references('idExamen')->on('Examenes');
            $table->integer('idServicio')->unsigned();
            $table->foreign('idServicio')->references('idServicio')->on('Servicios');
            $table->integer('idPago')->unsigned();
            $table->foreign('idPago')->references('idPago')->on('Pagos');
            $table->integer('idEscuela')->unsigned();
            $table->foreign('idEscuela')->references('idEscuela')->on('Escuelas');
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
        //
    }
}