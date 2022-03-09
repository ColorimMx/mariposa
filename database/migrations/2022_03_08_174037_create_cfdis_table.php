<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->char('version',5);
            $table->string('Serie',25)->nullable();
            $table->string('folio',40)->nullable();
            $table->date('fecha');
            $table->string('sello');
            $table->char('forma_pago',2)->nullable();
            $table->foreign('forma_pago')->references('id')->on('sat_forma_pago_catalogos');
            $table->string('no_certificado',20);
            $table->string('certificado');
            $table->string('condiciones_pago')->nullable();
            $table->decimal('subtotal',8,4);
            $table->decimal('descuento',8,4)->nullable();
            $table->char('moneda',3);
            $table->decimal('tipo_cambio',8,4)->nullable();
            $table->decimal('total',8,4);
            $table->char('tipo_comprobante',1);
            $table->foreign('tipo_comprobante')->references('id')->on('sat_tipo_comprobante_catalogos');
            $table->char('metodo_pago',3);
            $table->foreign('metodo_pago')->references('id')->on('sat_metodo_pago_catalogos');
            $table->string('lugar_expedicion');
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
        Schema::dropIfExists('cfdis');
    }
}
