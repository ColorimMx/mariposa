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
            $table->float('numero',11,0);
            $table->char('serie',1);
            $table->float('prefijo',1,0);
            $table->float('folio',10,0);
            $table->char('tipo',4);
            $table->char('cliente_id',8);
            $table->foreign('cliente_id')->references('id')->on('cliente_catalogos');
            $table->date('fecha');
            $table->date('fecha_vencimiento');
            $table->decimal('cambio_valor',10,5)->nullable();
            $table->char('moneda_id',2);
            $table->foreign('moneda_id')->references('id')->on('moneda_catalogos');
            $table->decimal('subtotal',10,5);
            $table->decimal('descuento',10,5)->nullable();
            $table->decimal('impuesto',10,5)->nullable();
            $table->decimal('total',10,5);
            $table->decimal('pago',10,5)->nullable();
            $table->decimal('saldo',10,5);
            $table->string('condiciones_pago');
            $table->float('dia',2,0);
            $table->float('mes',2,0);
            $table->float('anio',4,0);
            $table->string('info_creacion')->nullable();
            $table->string('info_confirmado')->nullable();
            $table->string('info_anulado')->nullable();
            $table->char('pedido_id')->nullable();
            $table->string('orden_compra_cliente')->nullable();
            $table->char('sucursal_id',3);
            $table->foreign('sucursal_id')->references('id')->on('empresa_sucursal_catalogos');
            $table->char('sat_forma_pago_id')->nullable();
            $table->foreign('sat_forma_pago_id')->references('id')->on('sat_forma_pago_catalogos');
            $table->char('sat_tipo_comprobante_id')->nullable();
            $table->foreign('sat_tipo_comprobante_id')->references('id')->on('sat_tipo_comprobante_catalogos');
            $table->char('sat_uso_id')->nullable();
            $table->foreign('sat_uso_id')->references('id')->on('sat_uso_cfdi_catalogos');
            $table->char('sat_tipo_relacion_id')->nullable();
            $table->foreign('sat_tipo_relacion_id')->references('id')->on('sat_tipo_relacion_catalogos');
            $table->char('cfdi_relacionado_uuid')->nullable();
            $table->char('sat_comercio_exterior_pedimento_id')->nullable();
            $table->foreign('sat_comercio_exterior_pedimento_id')->references('id')->on('sat_comercio_exterior_pedimento_catalogos');
            $table->char('sat_comercio_exterior_incoterm_id')->nullable();
            $table->foreign('sat_comercio_exterior_incoterm_id')->references('id')->on('sat_comercio_exterior_incoterm_catalogos');
            $table->char('sat_comercio_exterior_tipo_operacion_id')->nullable();
            $table->foreign('sat_comercio_exterior_tipo_operacion_id')->references('id')->on('sat_comercio_exterior_tipo_operacion_catalogos');
            $table->boolean('confirmado')->nullable();
            $table->boolean('anulado')->nullable();
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
