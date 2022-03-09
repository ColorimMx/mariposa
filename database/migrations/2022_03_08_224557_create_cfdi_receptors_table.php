<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiReceptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_receptors', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->char('cliente_id',8);
            $table->foreign('cliente_id')->references('id')->on('cliente_catalogos');
            $table->string('cfdi_id');
            $table->foreign('cfdi_id')->references('id')->on('cfdis');
            $table->string('rfc',13);
            $table->string('nombre');
            $table->char('residencia_fiscal',6)->nullable();
            $table->foreign('residencia_fiscal')->references('id')->on('sat_pais_catalogos');
            $table->string('num_reg_id_trib')->nullable();
            $table->char('uso_cfdi',3);
            $table->foreign('uso_cfdi')->references('id')->on('sat_uso_cfdi_catalogos');
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
        Schema::dropIfExists('cfdi_receptors');
    }
}
