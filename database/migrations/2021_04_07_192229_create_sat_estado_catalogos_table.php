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
            $table->char('id',6)->primary();
            $table->string('nombre');
            $table->char('pais_id',6);
            $table->foreign('pais_id')->references('id')->on('sat_pais_catalogos');
            $table->boolean('activo');
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
