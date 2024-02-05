<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->smallInteger('idprofesor')->primary();
            $table->smallInteger('idartemarcial');
            $table->smallInteger('idescuela');
            $table->smallInteger('idalumnos');
            $table->smallInteger('idpagos');
            $table->smallInteger('idservicios');
            $table->smallInteger('idexamen');
            $table->smallInteger('idseminario');
            $table->string('nombres', 50);
            $table->string('apellidopaterno', 50);
            $table->string('apellidomaterno', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesor');
    }
}
