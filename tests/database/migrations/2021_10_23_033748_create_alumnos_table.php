<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->smallInteger('idalumno')->primary();
            $table->smallInteger('iddireccion');
            $table->smallInteger('idartemarcial');
            $table->smallInteger('idtorneo');
            $table->smallInteger('idseminario');
            $table->smallInteger('idexamen');
            $table->smallInteger('idservicios');
            $table->smallInteger('idpagos');
            $table->smallInteger('idescuela');
            $table->string('nombre', 30);
            $table->string('apellidopaterno', 20);
            $table->string('apellidomaterno', 20);
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
