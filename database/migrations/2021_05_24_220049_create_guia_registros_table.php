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
            $table->unsignedBigInteger('guia_item_id');
            $table->foreign('guia_item_id')->references('id')->on('guia_item_catalogos');
            $table->char('empleado_id',5);
            $table->foreign('empleado_id')->references('id')->on('empleado_catalogos');
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
