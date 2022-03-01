<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaSucursalCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_sucursal_catalogos', function (Blueprint $table) {
            $table->char('id',3)->primary();
            $table->string('nombre');
            $table->char('empresa_id',5);
            $table->foreign('empresa_id')->references('id')->on('empresa_catalogos');
            $table->string('direccion_principal_1')->nullable();
            $table->string('direccion_principal_2')->nullable();
            $table->string('direccion_principal_3')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('num_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('localidad')->nullable();
            $table->char('ciudad_id',5)->nullable();
            $table->foreign('ciudad_id')->references('id')->on('demografia_ciudad_catalogos');
            $table->char('estado_id',5)->nullable();
            $table->foreign('estado_id')->references('id')->on('demografia_estado_catalogos');
            $table->char('pais_id',3)->nullable();
            $table->foreign('pais_id')->references('id')->on('demografia_pais_catalogos');
            $table->string('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono_2')->nullable();
            $table->string('fax')->nullable();
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
        Schema::dropIfExists('empresa_sucursal_catalogos');
    }
}
