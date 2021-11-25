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
            $table->string('id',5)->primary();
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('nombres');
            $table->date('nacimiento_fecha');
            $table->string('area_id',6);
            $table->foreign('area_id')->references('id')->on('area_catalogos');
            $table->string('departamento_id',6);
            $table->foreign('departamento_id')->references('id')->on('departamento_catalogos');
            $table->string('puesto_id',6);
            $table->foreign('puesto_id')->references('id')->on('puesto_catalogos');
            $table->string('puesto_tipo_id',6);
            $table->foreign('puesto_tipo_id')->references('id')->on('puesto_tipo_catalogos');
            $table->date('f_ingreso');
            $table->char('sexo',1);
            $table->string('curp',18);
            $table->string('rfc',13);
            $table->string('nss',16);
            $table->string('estado_civil_id',6);
            $table->foreign('estado_civil_id')->references('id')->on('estado_civil_catalogos');
            $table->string('nivel_estudio_id',6);
            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudio_catalogos');
            $table->string('estatus_estudio_id',6);
            $table->foreign('estatus_estudio_id')->references('id')->on('estatus_estudio_catalogos');
            $table->string('contrato_tipo_id',6);
            $table->foreign('contrato_tipo_id')->references('id')->on('contrato_tipo_catalogos');
            $table->string('personal_tipo_id',6);
            $table->foreign('personal_tipo_id')->references('id')->on('personal_tipo_catalogos');
            $table->string('jornada_tipo_id',6);
            $table->foreign('jornada_tipo_id')->references('id')->on('jornada_tipo_catalogos');
            $table->boolean('rotacion_turno');
            $table->boolean('clientes_usuarios');
            $table->boolean('jefe');
            $table->string('nomina_tipo_id',6);
            $table->foreign('nomina_tipo_id')->references('id')->on('nomina_tipo_catalogos');
            $table->string('localidad_empresa_id',6);
            $table->foreign('localidad_empresa_id')->references('id')->on('localidad_catalogos');
            $table->string('empresa_id',6);
            $table->foreign('empresa_id')->references('id')->on('empresa_catalogos');
            $table->string('calle',6)->nullable();
            $table->string('num_ext',6)->nullable();
            $table->string('num_int',6)->nullable();
            $table->string('colonia',6)->nullable();
            $table->string('localidad_id',6)->nullable();
            $table->foreign('localidad_id')->references('id')->on('sat_localidad_catalogos');
            $table->string('municipio_id',6)->nullable();
            $table->foreign('municipio_id')->references('id')->on('sat_municipio_catalogos');
            $table->string('cp',6)->nullable();
            $table->string('estado_id',6)->nullable();
            $table->foreign('estado_id')->references('id')->on('sat_estado_catalogos');
            $table->string('pais_id',6)->nullable();
            $table->foreign('pais_id')->references('id')->on('sat_pais_catalogos');
            $table->string('email',6)->nullable();
            $table->string('telefono_1',6)->nullable();
            $table->string('telefono_2',6)->nullable();
            $table->boolean('activo');
            $table->boolean('guia_I');
            $table->boolean('guia_II');
            $table->boolean('guia_III');
            $table->boolean('imp_credencial');
            $table->boolean('fotografia');
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
