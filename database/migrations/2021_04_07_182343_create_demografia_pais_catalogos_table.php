<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemografiaPaisCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demografia_pais_catalogos', function (Blueprint $table) {
            $table->char('id',3)->primary();
            $table->string('nombre');
            $table->char('pais_sat_id',6);
            $table->foreign('pais_sat_id')->references('id')->on('sat_pais_catalogos');
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
        Schema::dropIfExists('demografia_pais_catalogos');
    }
}
