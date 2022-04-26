<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuadrillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuadrillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_cua');
            $table->string('ine');
            $table->string('nss');
            $table->string('curp');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->date('f_nacimiento');
            $table->integer('edad');
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
        Schema::dropIfExists('cuadrillas');
    }
}
