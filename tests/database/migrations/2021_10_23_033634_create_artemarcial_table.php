<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtemarcialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artemarcial', function (Blueprint $table) {
            $table->smallInteger('idartemarcial')->primary();
            $table->smallInteger('idequipo');
            $table->string('tipodiciplina', 30);
            $table->date('fechainscripcion');
            $table->date('fechadesercion');
            $table->date('fechareincorporacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artemarcial');
    }
}
