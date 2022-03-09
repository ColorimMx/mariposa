<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiRelacionadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_relacionados', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cfdi_id');
            $table->foreign('cfdi_id')->references('id')->on('cfdis');
            $table->char('tipo_relacion',2);
            $table->string('UUID');
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
        Schema::dropIfExists('cfdi_relacionados');
    }
}
