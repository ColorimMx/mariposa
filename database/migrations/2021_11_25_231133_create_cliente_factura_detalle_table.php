<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteFacturaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_factura_detalle', function (Blueprint $table) {
            $table->id();
            $table->char('factura_id',22);
            $table->foreign('factura_id')->references('id')->on('cliente_factura');
            $table->string('origen');
            $table->float('linea');
            $table->char('producto_id',20);
            $table->foreign('producto_id')->references('id')->on('producto_catalogos');
            $table->decimal('cantidad',10,5);
            $table->decimal('precio',10,5);
            $table->decimal('subtotal',10,5);
            $table->decimal('iva',10,5)->nullable();
            $table->decimal('cambio_tipo',10,5)->nullable();
            $table->decimal('subtotal_mn',10,5)->nullable();
            $table->decimal('iva_mn',10,5)->nullable();
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
        Schema::dropIfExists('cliente_factura_detalle');
    }
}
