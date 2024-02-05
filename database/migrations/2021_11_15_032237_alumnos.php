<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumnos', function (Blueprint $table) {
            $table->increments('idAlumno');
            $table->string('nombre',30);
            $table->string('apellidopaterno',30);
            $table->string('apellidomaterno',30);
            $table->integer('idDireccion')->unsigned();
            $table->foreign('idDireccion')->references('idDireccion')->on('Direcciones');
            $table->integer('idArteMarcial')->unsigned();
            $table->foreign('idArteMarcial')->references('idArteMarcial')->on('ArtesMarciales');
            $table->integer('idTorneo')->unsigned();
            $table->foreign('idTorneo')->references('idTorneo')->on('Torneos');
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
