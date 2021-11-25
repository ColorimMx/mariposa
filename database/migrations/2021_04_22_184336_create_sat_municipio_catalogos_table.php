<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatMunicipioCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat_municipio_catalogos', function (Blueprint $table) {
            $table->string('id',6)->primary();
            $table->string('estado_id',6);
            $table->foreign('estado_id')->references('id')->on('sat_estado_catalogos');
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
        Schema::dropIfExists('sat_municipio_catalogos');
    }
}
