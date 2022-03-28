<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiComplementoCartaPorteMercanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_complemento_carta_porte_mercancias', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cartaporte_id');
            $table->foreign('cartaporte_id')->references('id')->on('cfdi_complemento_carta_portes');

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
        Schema::dropIfExists('cfdi_complemento_carta_porte_mercancias');
    }
}
