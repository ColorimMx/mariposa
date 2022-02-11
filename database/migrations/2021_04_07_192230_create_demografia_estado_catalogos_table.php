<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemografiaEstadoCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demografia_estado_catalogos', function (Blueprint $table) {
            $table->char('id',5)->primary();
            $table->string('nombre');
            $table->char('estado_sat_id',6);
            $table->foreign('estado_sat_id')->references('id')->on('sat_estado_catalogos');
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
        Schema::dropIfExists('demografia_estado_catalogos');
    }
}
