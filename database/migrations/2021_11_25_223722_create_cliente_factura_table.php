<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_factura', function (Blueprint $table) {
            $table->char('id',22)->primary();
            $table->double('numero',8,4);
            $table->char('serie',1);
            $table->integer('prefijo');
            $table->double('folio',8,2);
            $table->char('tipo',4);
            $table->char('cliente_id',8);
            $table->foreign('cliente_id')->references('id')->on('cliente_catalogos');
            $table->date('fecha');
            $table->date('fecha_vencimiento');
            $table->double('divisa_valor',8,4)->nullable();
            $table->char('moneda_id',2);
            $table->foreign('moneda_id')->references('id')->on('moneda_catalogos');
            $table->double('subtotal',8,4);
            $table->double('descuento',8,4)->nullable();
            $table->double('impuesto',8,4)->nullable();
            $table->double('total',8,4);
            $table->double('pago',8,4)->nullable();
            $table->double('saldo',8,4);
            $table->string('condiciones_pago');
            $table->integer('dia');
            $table->integer('mes');
            $table->integer('anio');
            $table->string('info_creacion')->nullable();
            $table->string('info_confirmado')->nullable();
            $table->string('info_anulado')->nullable();
            $table->integer('pedido_id')->nullable();
            $table->string('orden_compra_cliente')->nullable();
            $table->char('sucursal_id',3);
            $table->foreign('sucursal_id')->references('id')->on('empresa_sucursal_catalogos');
            $table->char('sat_impuesto_id',3)->nullable();
            $table->foreign('sat_impuesto_id')->references('id')->on('sat_impuesto_catalogos');
            $table->char('sat_forma_pago_id',2)->nullable();
            $table->foreign('sat_forma_pago_id')->references('id')->on('sat_forma_pago_catalogos');
            $table->char('sat_metodo_pago_id',3)->nullable();
            $table->foreign('sat_metodo_pago_id')->references('id')->on('sat_metodo_pago_catalogos');
            $table->char('sat_tipo_comprobante_id',1)->nullable();
            $table->foreign('sat_tipo_comprobante_id')->references('id')->on('sat_tipo_comprobante_catalogos');
            $table->char('sat_uso_id',3)->nullable();
            $table->foreign('sat_uso_id')->references('id')->on('sat_uso_cfdi_catalogos');
            $table->char('sat_tipo_relacion_id',2)->nullable();
            $table->foreign('sat_tipo_relacion_id')->references('id')->on('sat_tipo_relacion_catalogos');
            $table->string('cfdi_relacionado_uuid')->nullable();
            $table->char('sat_comercio_exterior_pedimento_id',2)->nullable();
            $table->foreign('sat_comercio_exterior_pedimento_id')->references('id')->on('sat_comercio_exterior_pedimento_catalogos');
            $table->char('sat_comercio_exterior_incoterm_id',3)->nullable();
            $table->foreign('sat_comercio_exterior_incoterm_id')->references('id')->on('sat_comercio_exterior_incoterm_catalogos');
            $table->char('sat_comercio_exterior_tipo_operacion_id',1)->nullable();
            $table->foreign('sat_comercio_exterior_tipo_operacion_id')->references('id')->on('sat_comercio_exterior_tipo_operacion_catalogos');
            $table->boolean('confirmado');
            $table->boolean('anulado');
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
        Schema::dropIfExists('cliente_factura');
    }
}
