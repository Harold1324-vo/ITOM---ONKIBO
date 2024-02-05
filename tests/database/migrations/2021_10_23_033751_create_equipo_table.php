<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->smallInteger('idequipo')->primary();
            $table->string('nombreequipo', 30);
            $table->smallInteger('cantidad');
            $table->decimal('precio', 10, 0);
            $table->smallInteger('cantidadexistencia');
            $table->string('color', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
}
