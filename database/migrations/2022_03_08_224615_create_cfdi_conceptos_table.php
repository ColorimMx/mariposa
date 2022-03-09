<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiConceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_conceptos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cfdi_id');
            $table->foreign('cfdi_id')->references('id')->on('cfdis');
            $table->char('clave_prod_serv',8);
            $table->foreign('clave_prod_serv')->references('id')->on('sat_producto_servicio_catalogos');
            $table->char('no_identificacion',20);
            $table->foreign('no_identificacion')->references('id')->on('producto_catalogos');
            $table->decimal('cantidad',8,4);
            $table->char('clave_unidad',3);
            $table->char('unidad',2);
            $table->foreign('unidad')->references('id')->on('unidad_medida_catalogos');
            $table->string('descripcion');
            $table->decimal('valor_unitario',8,4);
            $table->decimal('importe',8,4);
            $table->decimal('descuento',8,4)->nullable();
            $table->decimal('traslado_base',8,4);
            $table->char('impuesto',3);
            $table->foreign('impuesto')->references('id')->on('sat_impuesto_catalogos');
            $table->string('tipo_factor');
            $table->decimal('tasa_cuota',8,4)->nullable();
            $table->decimal('impuesto_importe',8,4)->nullable();
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
        Schema::dropIfExists('cfdi_conceptos');
    }
}
