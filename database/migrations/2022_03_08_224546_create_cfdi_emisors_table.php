<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiEmisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_emisors', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cfdi_id');
            $table->foreign('cfdi_id')->references('id')->on('cfdis');
            $table->string('rfc',13);
            $table->string('nombre');
            $table->char('regimen_fiscal',3);
            $table->foreign('regimen_fiscal')->references('id')->on('sat_regimen_fiscal_catalogos');
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
        Schema::dropIfExists('cfdi_emisors');
    }
}
