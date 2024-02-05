<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtesMarciales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ArtesMarciales', function (Blueprint $table) {
            $table->increments('idArteMarcial');
            $table->string('tipoDiciplina',30);
            $table->date('fechaInscripcion');
            $table->date('fechaDesercion');
            $table->date('fechaReincorporacion');
            $table->integer('idEquipo')->unsigned();
            $table->foreign('idEquipo')->references('idEquipo')->on('Equipos');
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