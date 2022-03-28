<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiComplementoCartaPortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_complemento_carta_portes', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cfdi_id');
            $table->foreign('cfdi_id')->references('id')->on('cfdis');
            $table->string('version');
            $table->string('transp_internac');
            $table->string('entrada_salida_merc')->nullable();
            $table->string('pais_origen_destino')->nullable();
            $table->string('via_entrada_salida')->nullable();
            $table->decimal('total_dist_rec',8,4);
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
        Schema::dropIfExists('cfdi_complemento_carta_portes');
    }
}
