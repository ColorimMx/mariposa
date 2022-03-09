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
            $table->string('rfc',13);
            $table->string('razon_social');
            $table->date('fecha_ingreso');
            $table->string('direccion_principal_1')->nullable();
            $table->string('direccion_principal_2')->nullable();
            $table->string('direccion_principal_3')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('num_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('localidad')->nullable();
            $table->char('ciudad_id',5)->nullable();
            $table->foreign('ciudad_id')->references('id')->on('demografia_ciudad_catalogos');
            $table->char('estado_id',5)->nullable();
            $table->foreign('estado_id')->references('id')->on('demografia_estado_catalogos');
            $table->char('pais_id',3)->nullable();
            $table->foreign('pais_id')->references('id')->on('demografia_pais_catalogos');
            $table->string('cp');
            $table->string('telefono')->nullable();
            $table->string('telefono_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email_fiscal')->nullable();
            $table->string('e_mail')->nullable();
            $table->char('cuenta_id',8)->nullable();
            $table->foreign('cuenta_id')->references('id')->on('contabilidad_plan_cuentas');
            $table->char('moneda_id',2)->nullable();
            $table->foreign('moneda_id')->references('id')->on('moneda_catalogos');
            $table->string('dias_credito')->nullable();
            $table->string('termino_credito')->nullable();
            $table->decimal('limite_credito',10,5)->nullable();
            $table->decimal('saldo',10,5)->nullable();
            $table->decimal('reserva',10,5)->nullable();
            $table->char('zona_id',2)->nullable();
            $table->foreign('zona_id')->references('id')->on('cliente_zona_catalogos');
            $table->char('tipo_id',3)->nullable();
            $table->foreign('tipo_id')->references('id')->on('cliente_tipo_catalogos');
            $table->char('giro_id',5)->nullable();
            $table->foreign('giro_id')->references('id')->on('cliente_giro_catalogos');
            $table->string('categoria_id')->nullable();
            $table->string('sector_id')->nullable();
            $table->char('localizacion_id',1)->nullable();
            $table->foreign('localizacion_id')->references('id')->on('cliente_localizacion_catalogos');
            $table->char('vendedor_id',5)->nullable();
            $table->foreign('vendedor_id')->references('id')->on('cliente_vendedor_catalogos');
            $table->char('sat_regimen_fiscal_id',3)->nullable();
            $table->foreign('sat_regimen_fiscal_id')->references('id')->on('sat_regimen_fiscal_catalogos');
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
        Schema::dropIfExists('cliente_catalogos');
    }
}
