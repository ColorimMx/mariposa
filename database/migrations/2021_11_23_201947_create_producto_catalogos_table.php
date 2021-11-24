<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_catalogos', function (Blueprint $table) {
            $table->char('id',20)->primary();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->float('codigo_barras',14,0)->nullable();
            $table->char('id_grupo',5)->nullable();
            $table->foreign('id_grupo')->references('id')->on('producto_grupo_catalogos');
            $table->char('id_subgrupo',5)->nullable();
            $table->foreign('id_subgrupo')->references('id')->on('producto_subgrupo_catalogos');
            $table->decimal('existencias',10,5)->nullable();
            $table->decimal('disponible',10,5)->nullable();
            $table->decimal('asignado',10,5)->nullable();
            $table->char('um',2);
            $table->decimal('largo',10,5)->nullable();
            $table->decimal('ancho',10,5)->nullable();
            $table->decimal('altura',10,5)->nullable();
            $table->decimal('costo_promedio',10,5)->nullable();
            $table->decimal('costo_ultima_produccion',10,5)->nullable();
            $table->decimal('total_costo_inventario',10,5)->nullable();
            $table->date('fecha_ultimo_costo_promedio')->nullable();
            $table->date('fecha_ultima_produccion')->nullable();
            $table->char('id_cuenta_invtentario',8)->nullable();
            $table->foreign('id_cuenta_invtentario')->references('id')->on('contabilidad_plan_cuentas');
            $table->char('id_cuenta_costo',8)->nullable();
            $table->char('id_cuenta_ingreso_nacional',8)->nullable();
            $table->char('id_cuenta_ingreso_extrangero',8)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_catalogos');
    }
}
