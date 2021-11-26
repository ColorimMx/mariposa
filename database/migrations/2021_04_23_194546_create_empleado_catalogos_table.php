<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_catalogos', function (Blueprint $table) {
            $table->char('id',5)->primary();
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('nombres');
            $table->date('nacimiento_fecha');
            $table->char('area_id',6);
            $table->foreign('area_id')->references('id')->on('area_catalogos');
            $table->char('departamento_id',6);
            $table->foreign('departamento_id')->references('id')->on('departamento_catalogos');
            $table->char('puesto_id',6);
            $table->foreign('puesto_id')->references('id')->on('puesto_catalogos');
            $table->char('puesto_tipo_id',6);
            $table->foreign('puesto_tipo_id')->references('id')->on('puesto_tipo_catalogos');
            $table->date('ingreso_fecha');
            $table->char('sexo',1);
            $table->string('curp',18);
            $table->string('rfc',13);
            $table->string('nss',16);
            $table->char('estado_civil_id',6);
            $table->foreign('estado_civil_id')->references('id')->on('estado_civil_catalogos');
            $table->char('nivel_estudio_id',6);
            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudio_catalogos');
            $table->char('estatus_estudio_id',6);
            $table->foreign('estatus_estudio_id')->references('id')->on('estatus_estudio_catalogos');
            $table->char('contrato_tipo_id',6);
            $table->foreign('contrato_tipo_id')->references('id')->on('contrato_tipo_catalogos');
            $table->char('personal_tipo_id',6);
            $table->foreign('personal_tipo_id')->references('id')->on('personal_tipo_catalogos');
            $table->char('jornada_tipo_id',6);
            $table->foreign('jornada_tipo_id')->references('id')->on('jornada_tipo_catalogos');
            $table->boolean('rotacion_turno');
            $table->boolean('clientes_usuarios');
            $table->boolean('jefe');
            $table->char('nomina_tipo_id',6);
            $table->foreign('nomina_tipo_id')->references('id')->on('nomina_tipo_catalogos');
            $table->char('localidad_empresa_id',6);
            $table->foreign('localidad_empresa_id')->references('id')->on('localidad_catalogos');
            $table->char('empresa_id',5);
            $table->foreign('empresa_id')->references('id')->on('empresa_catalogos');
            $table->string('calle')->nullable();
            $table->string('num_ext')->nullable();
            $table->string('num_int')->nullable();
            $table->string('colonia')->nullable();
            $table->char('localidad_id',6)->nullable();
            $table->foreign('localidad_id')->references('id')->on('sat_localidad_catalogos');
            $table->char('municipio_id',6)->nullable();
            $table->foreign('municipio_id')->references('id')->on('sat_municipio_catalogos');
            $table->string('cp')->nullable();
            $table->char('estado_id',6)->nullable();
            $table->foreign('estado_id')->references('id')->on('sat_estado_catalogos');
            $table->char('pais_id',6)->nullable();
            $table->foreign('pais_id')->references('id')->on('sat_pais_catalogos');
            $table->string('email')->nullable();
            $table->string('telefono_1')->nullable();
            $table->string('telefono_2')->nullable();
            $table->boolean('guia_I');
            $table->boolean('guia_II');
            $table->boolean('guia_III');
            $table->boolean('credencial_impresa');
            $table->boolean('fotografia');
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
        Schema::dropIfExists('empleado_catalogos');
    }
}
