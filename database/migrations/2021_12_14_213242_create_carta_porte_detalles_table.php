<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaPorteDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_porte_detalles', function (Blueprint $table) {
            $table->id();
            $table->char('cartaporte_id',10);
            $table->foreign('cartaporte_id')->references('id')->on('carta_porte_principals');
            $table->char('producto_id',20);
            $table->foreign('producto_id')->references('id')->on('producto_catalogos');
            $table->decimal('cantidad',20,6)->nullable();
            $table->char('um',2);
            $table->foreign('um')->references('id')->on('unidad_medida_catalogos');
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
        Schema::dropIfExists('carta_porte_detalles');
    }
}