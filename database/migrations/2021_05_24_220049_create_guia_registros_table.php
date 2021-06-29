<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiaRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guia_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guia_item');
            $table->foreign('id_guia_item')->references('id')->on('guia_item_catalogos');
            $table->string('id_empleado',5);
            $table->foreign('id_empleado')->references('id')->on('empleado_catalogos');
            $table->string('respuesta');
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
        Schema::dropIfExists('guia_registros');
    }
}
