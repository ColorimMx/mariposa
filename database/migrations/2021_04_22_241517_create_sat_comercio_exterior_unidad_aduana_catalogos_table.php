<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatComercioExteriorUnidadAduanaCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat_comercio_exterior_unidad_aduana_catalogos', function (Blueprint $table) {
            $table->char('id',2)->primary();
            $table->string('nombre');
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
        Schema::dropIfExists('sat_comercio_exterior_unidad_aduana_catalogos');
    }
}