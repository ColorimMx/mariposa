<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatEstadoCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat_estado_catalogos', function (Blueprint $table) {
            $table->string('id',6)->primary();
            $table->string('id_pais',6);
            $table->foreign('id_pais')->references('id')->on('sat_pais_catalogos');
            $table->string('nombre');
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
        Schema::dropIfExists('sat_estado_catalogos');
    }
}
