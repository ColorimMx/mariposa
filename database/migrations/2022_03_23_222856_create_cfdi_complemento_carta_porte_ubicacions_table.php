<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiComplementoCartaPorteUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_complemento_carta_porte_ubicacions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('cartaporte_id');
            $table->foreign('cartaporte_id')->references('id')->on('cfdi_complemento_carta_portes');
            $table->string('tipo_ubicacion');
            $table->string('id_ubicacion')->nullable();
            $table->string('rfc_remitente',13);
            $table->string('nombre_remitente')->nullable();
            $table->string('num_reg_id_trib')->nullable();
            $table->char('residencia_fiscal',6)->nullable();
            $table->foreign('residencia_fiscal')->references('id')->on('sat_pais_catalogos');
            $table->string('rfc_destinatario',13);
            $table->string('nombre_destinatario')->nullable();
            $table->dateTime('fecha_hora_salida_llegada');
            $table->string('domicilio_callle')->nullable();
            $table->string('domicilio_numero_exterior')->nullable();
            $table->string('domicilio_numero_interior')->nullable();
            $table->string('domicilio_colonia')->nullable();
            $table->char('domicilio_localidad',6)->nullable();
            $table->foreign('domicilio_localidad')->references('id')->on('sat_localidad_catalogos');
            $table->string('domicilio_referencia')->nullable();
            $table->char('domicilio_municipio',6)->nullable();
            $table->foreign('domicilio_municipio')->references('id')->on('sat_municipio_catalogos');
            $table->char('domicilio_estado',6);
            $table->foreign('domicilio_estado')->references('id')->on('sat_estado_catalogos');
            $table->char('domicilio_pais',6);
            $table->foreign('domicilio_pais')->references('id')->on('sat_pais_catalogos');
            $table->string('domicilio_cp');
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
        Schema::dropIfExists('cfdi_complemento_carta_porte_ubicacions');
    }
}
