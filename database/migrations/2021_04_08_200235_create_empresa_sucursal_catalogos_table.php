<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaSucursalCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_sucursal_catalogos', function (Blueprint $table) {
            $table->char('id',3)->primary();
            $table->string('nombre');
            $table->char('empresa_id',6);
            $table->foreign('empresa_id')->references('id')->on('empresa_catalogos');
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
        Schema::dropIfExists('empresa_sucursal_catalogos');
    }
}
