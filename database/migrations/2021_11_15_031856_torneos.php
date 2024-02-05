<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Torneos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Torneos', function (Blueprint $table) {
            $table->increments('idTorneo');
            $table->date('fechaTorneo');
            $table->integer('precioTorneo');
            $table->integer('numeroPeleas');
            $table->string('resultado',30);
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

