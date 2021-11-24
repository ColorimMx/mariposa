<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContabilidadPlanCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contabilidad_plan_cuentas', function (Blueprint $table) {
            $table->char('id',8)->primary();
            $table->string('nombre');
            $table->char('id_cuenta_tipo',1);
            $table->boolean('cuenta_de_agrupacion');
            $table->string('tipo_configuracion')->nullable();
            $table->decimal('id_agrupacion',5,2);
            $table->char('id_clasificacion',3)->nullable();
            $table->boolean('inactivo');
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
        Schema::dropIfExists('contabilidad_plan_cuentas');
    }
}
