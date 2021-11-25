<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubItemMenuCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_item_menu_catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('id_sub_menu');
            $table->foreign('id_sub_menu')->references('id')->on('sub_menu_catalogos');
            $table->string('route');
            $table->string('icon');
            $table->string('icon_color');
            $table->string('classes');
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
        Schema::dropIfExists('sub_item_menu_catalogos');
    }
}
