<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_catalogos', function (Blueprint $table) {
            $table->char('id',8)->primary();
            $table->string('nombre');
            $table->string('rfc');
            $table->string('razon_social');
            $table->boolean('inactivo');
            $table->date('fecha_ingreso');
            $table->string('direccion_principal_1')->nullable();
            $table->string('direccion_principal_2')->nullable();
            $table->string('direccion_principal_3')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('num_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('localidad')->nullable();
            $table->char('id_ciudad',5)->nullable();
            $table->foreign('id_ciudad')->references('id')->on('demografia_ciudad_catalogos');
            $table->char('id_estado',5)->nullable();
            $table->foreign('id_estado')->references('id')->on('demografia_estado_catalogos');
            $table->char('id_pais',3)->nullable();
            $table->foreign('id_pais')->references('id')->on('demografia_pais_catalogos');
            $table->string('cp');
            $table->string('telefono')->nullable();
            $table->string('telefono_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email_fiscal')->nullable();
            $table->string('e_mail')->nullable();
            $table->char('id_cuenta',8)->nullable();
            $table->foreign('id_cuenta')->references('id')->on('contabilidad_plan_cuentas');
            $table->char('id_moneda',2)->nullable();
            $table->foreign('id_moneda')->references('id')->on('moneda_catalogos');
            $table->string('dias_credito')->nullable();
            $table->string('termino_credito')->nullable();
            $table->decimal('limite_credito',10,5)->nullable();
            $table->decimal('saldo',10,5)->nullable();
            $table->decimal('reserva',10,5)->nullable();
            $table->char('id_zona',2)->nullable();
            $table->foreign('id_zona')->references('id')->on('cliente_zona_catalogos');
            $table->char('id_tipo',3)->nullable();
            $table->foreign('id_tipo')->references('id')->on('cliente_tipo_catalogos');
            $table->char('id_giro',5)->nullable();
            $table->foreign('id_giro')->references('id')->on('cliente_giro_catalogos');
            $table->string('id_categoria')->nullable();
            $table->string('id_sector')->nullable();
            $table->char('id_localizacion',1)->nullable();
            $table->foreign('id_localizacion')->references('id')->on('cliente_localizacion_catalogos');
            $table->char('id_vendedor',5)->nullable();
            $table->foreign('id_vendedor')->references('id')->on('cliente_vendedor_catalogos');
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
        Schema::dropIfExists('cliente_catalogos');
    }
}
