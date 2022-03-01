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
            $table->char('cuenta_tipo_id',1);
            $table->boolean('cuenta_de_agrupacion');
            $table->string('tipo_configuracion')->nullable();
            $table->decimal('agrupacion_id',5,2);
            $table->char('clasificacion_id',3)->nullable();
            $table->boolean('activo');
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
