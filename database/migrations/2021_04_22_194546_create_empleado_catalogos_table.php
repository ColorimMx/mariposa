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
            $table->date('f_nacimiento');
            $table->string('id_area',6);
            $table->foreign('id_area')->references('id')->on('area_catalogos');
            $table->string('id_departamento',6);
            $table->foreign('id_departamento')->references('id')->on('departamento_catalogos');
            $table->string('id_puesto',6);
            $table->foreign('id_puesto')->references('id')->on('puesto_catalogos');
            $table->string('id_puesto_tipo',6);
            $table->foreign('id_puesto_tipo')->references('id')->on('puesto_tipo_catalogos');
            $table->date('f_ingreso');
            $table->char('sexo',1);
            $table->string('curp',18);
            $table->string('rfc',13);
            $table->string('nss',16);
            $table->string('id_estado_civil',6);
            $table->foreign('id_estado_civil')->references('id')->on('estado_civil_catalogos');
            $table->string('id_nivel_estudio',6);
            $table->foreign('id_nivel_estudio')->references('id')->on('nivel_estudio_catalogos');
            $table->string('id_estatus_estudio',6);
            $table->foreign('id_estatus_estudio')->references('id')->on('estatus_estudio_catalogos');
            $table->string('id_contrato_tipo',6);
            $table->foreign('id_contrato_tipo')->references('id')->on('contrato_tipo_catalogos');
            $table->string('id_personal_tipo',6);
            $table->foreign('id_personal_tipo')->references('id')->on('personal_tipo_catalogos');
            $table->string('id_jornada_tipo',6);
            $table->foreign('id_jornada_tipo')->references('id')->on('jornada_tipo_catalogos');
            $table->boolean('rotacion_turno');
            $table->boolean('clientes_usuarios');
            $table->boolean('jefe');
            $table->string('id_nomina_tipo',6);
            $table->foreign('id_nomina_tipo')->references('id')->on('nomina_tipo_catalogos');
            $table->string('id_localidad_empresa',6);
            $table->foreign('id_localidad_empresa')->references('id')->on('localidad_catalogos');
            $table->string('id_empresa',6);
            $table->foreign('id_empresa')->references('id')->on('empresa_catalogos');
            $table->string('calle',6)->nullable();
            $table->string('num_ext',6)->nullable();
            $table->string('num_int',6)->nullable();
            $table->string('colonia',6)->nullable();
            $table->string('id_localidad',6)->nullable();
            $table->foreign('id_localidad')->references('id')->on('sat_localidad_catalogos');
            $table->string('id_municipio',6)->nullable();
            $table->foreign('id_municipio')->references('id')->on('sat_municipio_catalogos');
            $table->string('cp',6)->nullable();
            $table->string('id_estado',6)->nullable();
            $table->foreign('id_estado')->references('id')->on('sat_estado_catalogos');
            $table->string('id_pais',6)->nullable();
            $table->foreign('id_pais')->references('id')->on('sat_pais_catalogos');
            $table->string('email',6)->nullable();
            $table->string('telefono_1',6)->nullable();
            $table->string('telefono_2',6)->nullable();
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
