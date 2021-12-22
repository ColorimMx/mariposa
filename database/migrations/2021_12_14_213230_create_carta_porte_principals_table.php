<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaPortePrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta_porte_principals', function (Blueprint $table) {
            $table->char('id',10)->primary();
            $table->string('trasnferencia_empresa_id',25);
            $table->dateTime('fecha');
            $table->char('moneda_id',2);
            $table->foreign('moneda_id')->references('id')->on('moneda_catalogos');
            $table->char('almacen_id',3);
            $table->foreign('almacen_id')->references('id')->on('empresa_almacen_catalogos');
            $table->char('destino_almacen_id',3);
            $table->foreign('destino_almacen_id')->references('id')->on('empresa_almacen_catalogos');
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
        Schema::dropIfExists('carta_porte_principals');
    }
}
