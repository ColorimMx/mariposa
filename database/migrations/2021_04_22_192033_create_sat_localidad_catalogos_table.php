<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatLocalidadCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat_localidad_catalogos', function (Blueprint $table) {
            $table->char('id',6)->primary();
            $table->string('nombre');
            $table->char('estado_id',6);
            $table->foreign('estado_id')->references('id')->on('sat_estado_catalogos');
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
        Schema::dropIfExists('sat_localidad_catalogos');
    }
}
