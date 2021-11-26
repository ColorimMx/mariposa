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
            $table->char('grupo_id',5)->nullable();
            $table->foreign('grupo_id')->references('id')->on('producto_grupo_catalogos');
            $table->char('subgrupo_id',5)->nullable();
            $table->foreign('subgrupo_id')->references('id')->on('producto_subgrupo_catalogos');
            $table->char('marca_id',5)->nullable()->nullable();
            $table->foreign('marca_id')->references('id')->on('producto_marca_catalogos');
            $table->char('modelo_id',3)->nullable()->nullable();
            $table->foreign('modelo_id')->references('id')->on('producto_modelo_catalogos');
            $table->char('submodelo_id',3)->nullable()->nullable();
            $table->foreign('submodelo_id')->references('id')->on('producto_submodelo_catalogos');
            $table->decimal('existencias',10,5)->nullable();
            $table->decimal('disponible',10,5)->nullable();
            $table->decimal('asignado',10,5)->nullable();
            $table->char('um',2);
            $table->decimal('peso_neto',10,5)->nullable();
            $table->decimal('peso_bruto',10,5)->nullable();
            $table->decimal('largo',10,5)->nullable();
            $table->decimal('ancho',10,5)->nullable();
            $table->decimal('altura',10,5)->nullable();
            $table->decimal('costo_promedio',10,5)->nullable();
            $table->decimal('costo_ultima_produccion',10,5)->nullable();
            $table->decimal('total_costo_inventario',10,5)->nullable();
            $table->date('fecha_ultimo_costo_promedio')->nullable();
            $table->date('fecha_ultima_produccion')->nullable();
            $table->char('cuenta_invtentario_id',8)->nullable();
            $table->foreign('cuenta_invtentario_id')->references('id')->on('contabilidad_plan_cuentas');
            $table->char('cuenta_costo_id',8)->nullable();
            $table->char('cuenta_ingreso_nacional_id',8)->nullable();
            $table->char('cuenta_ingreso_extrangero_id',8)->nullable();
            $table->char('sat_unidad_id',3)->nullable();
            $table->foreign('sat_unidad_id')->references('id')->on('sat_unidad_catalogos');
            $table->char('sat_producto_servicio_id',8)->nullable();
            $table->foreign('sat_producto_servicio_id')->references('id')->on('sat_producto_servicio_catalogos');
            $table->char('sat_fraccion_arancelaria_id',10)->nullable();
            $table->foreign('sat_fraccion_arancelaria_id')->references('id')->on('sat_comercio_exterior_fraccion_arancelaria_catalogos');
            $table->char('sat_unidad_aduana_id',2)->nullable();
            $table->foreign('sat_unidad_aduana_id')->references('id')->on('sat_comercio_exterior_unidad_aduana_catalogos');
            $table->boolean('activo');
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
