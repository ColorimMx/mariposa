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
            $table->unsignedBigInteger('id_guia');
            $table->foreign('id_guia')->references('id')->on('guia_catalogos');
            $table->integer('numero_pregunta');
            $table->string('pregunta');
            $table->unsignedBigInteger('id_seccion');
            $table->foreign('id_seccion')->references('id')->on('guia_seccion_catalogos');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('guia_categoria_catalogos');
            $table->unsignedBigInteger('id_dominio');
            $table->foreign('id_dominio')->references('id')->on('guia_dominio_catalogos');
            $table->unsignedBigInteger('id_dimension');
            $table->foreign('id_dimension')->references('id')->on('guia_dimension_catalogos');
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
