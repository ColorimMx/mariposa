<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiaItemCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guia_item_catalogos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guia_id');
            $table->foreign('guia_id')->references('id')->on('guia_catalogos');
            $table->integer('numero_pregunta');
            $table->string('pregunta');
            $table->unsignedBigInteger('seccion_id');
            $table->foreign('seccion_id')->references('id')->on('guia_seccion_catalogos');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('guia_categoria_catalogos');
            $table->unsignedBigInteger('dominio_id');
            $table->foreign('dominio_id')->references('id')->on('guia_dominio_catalogos');
            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('guia_dimension_catalogos');
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
        Schema::dropIfExists('guia_item_catalogos');
    }
}
