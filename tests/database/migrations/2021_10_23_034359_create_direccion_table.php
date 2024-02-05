<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->smallInteger('iddireccion')->primary();
            $table->string('nombreestado', 20)->nullable();
            $table->string('municipio', 30);
            $table->string('colonia', 30);
            $table->string('calle', 30);
            $table->smallInteger('cp');
            $table->smallInteger('numeroexterior');
            $table->smallInteger('idalumno');
            $table->smallInteger('idseminario');
            $table->smallInteger('idtorneo');
            $table->smallInteger('idescuela');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
}
