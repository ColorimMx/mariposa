<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoAutotransporteCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_autotransporte_catalogos', function (Blueprint $table) {
            $table->char('id',16)->primary();
            $table->char('sat_carta_porte_tipo_permiso_catalogos_id',6);
            $table->foreign('sat_carta_porte_tipo_permiso_catalogos_id')->references('id')->on('sat_carta_porte_tipo_permiso_catalogos');
            $table->dateTime('vigencia');
            $table->boolean('asignado');
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
        Schema::dropIfExists('permiso_autotransporte_catalogos');
    }
}
