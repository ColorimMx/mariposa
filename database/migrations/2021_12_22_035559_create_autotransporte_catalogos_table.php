<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutotransporteCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autotransporte_catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('anio_modelo_vm');
            $table->char('placa',8);
            $table->char('permiso_autotransporte_id',16);
            $table->foreign('permiso_autotransporte_id')->references('id')->on('permiso_autotransporte_catalogos');
            $table->char('config_vehicular_id',8);
            $table->foreign('config_vehicular_id')->references('id')->on('sat_carta_porte_config_vehicular_catalogos');
            $table->char('asegura_resp_civil_id',16);
            $table->foreign('asegura_resp_civil_id')->references('id')->on('seguro_autotransporte_catalogos');
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
        Schema::dropIfExists('autotransporte_catalogos');
    }
}
