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
            $table->char('id',27)->primary();
            $table->char('factura_id',22);
            $table->foreign('factura_id')->references('id')->on('cliente_factura');
            $table->float('linea');
            $table->char('producto_id',20);
            $table->foreign('producto_id')->references('id')->on('producto_catalogos');
            $table->double('cantidad',6,4);
            $table->double('precio',6,4);
            $table->double('subtotal',6,4);
            $table->double('iva',6,4)->nullable();
            $table->double('divisa_valor',6,4)->nullable();
            $table->double('subtotal_mn',6,4)->nullable();
            $table->double('iva_mn',6,4)->nullable();
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
