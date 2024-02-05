<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Direcciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Direcciones', function (Blueprint $table) {
            $table->increments('idDireccion');
            $table->string('nombreEstado',30);
            $table->string('municipio',30);
            $table->string('colonia',30);
            $table->string('calle',30);
            $table->integer('cp');
            $table->integer('numeroExterior');
            /*$table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')->references('idAlumno')->on('Alumnos');*/
            $table->integer('idSeminario')->unsigned();
            $table->foreign('idSeminario')->references('idSeminario')->on('Seminarios');
            $table->integer('idTorneo')->unsigned();
            $table->foreign('idTorneo')->references('idTorneo')->on('Torneos');
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
