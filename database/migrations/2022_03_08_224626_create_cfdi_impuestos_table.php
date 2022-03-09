<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiImpuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_impuestos', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cfdi_id');
            $table->foreign('cfdi_id')->references('id')->on('cfdis');
            $table->decimal('total_impuestos_retenidos',8,4)->nullable();
            $table->decimal('total_impuestos_trasladados',8,4)->nullable();
            $table->char('impuesto',3);
            $table->foreign('impuesto')->references('id')->on('sat_impuesto_catalogos');
            $table->string('tipo_factor')->nullable();
            $table->decimal('tasa_cuota',8,4)->nullable();
            $table->decimal('importe',8,4);
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
        Schema::dropIfExists('cfdi_impuestos');
    }
}
