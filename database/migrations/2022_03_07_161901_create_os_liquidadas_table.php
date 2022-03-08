<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOsLiquidadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os_liquidadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->date('fecha');
            $table->integer('telefono');
            $table->string('nombre_cliente');
            $table->string('name_tecnico');
            $table->string('pic_tecnico');
            $table->integer('metros_instalacion');
            $table->integer('numero_os');
            $table->integer('pisaplex');
            $table->string('distrito');
            $table->string('terminal');
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
        Schema::dropIfExists('os_liquidadas');
    }
}
