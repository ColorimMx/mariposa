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
            $table->string('id',8)->primary();
            $table->string('nombre');
            $table->string('rfc');
            $table->string('razon_social');
            $table->boolean('inactivo');
            $table->date('fecha_ingreso');
            $table->string('direccion_principal_1');
            $table->string('direccion_principal_2');
            $table->string('direccion_principal_3');
            $table->string('num_exterior');
            $table->string('num_interior');
            $table->string('colonia');
            $table->string('id_municipio');
            $table->string('id_localidad');
            $table->string('id_ciudad');
            $table->string('id_estado');
            $table->string('id_pais');
            $table->string('id_zona');
            $table->string('cp');
            $table->string('telefono');
            $table->string('telefono_2');
            $table->string('fax');
            $table->string('email_fiscal');
            $table->string('e_mail');
            $table->string('id_cuenta');
            $table->string('id_moneda');
            $table->string('dias_credito');
            $table->string('termino_credito');
            $table->string('limite_credito');
            $table->string('saldo');
            $table->string('reserva');
            $table->string('id_tipo');
            $table->string('id_giro');
            $table->string('id_categoria');
            $table->string('id_sector');
            $table->string('id_localizacion');
            $table->string('id_vendedor');
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
