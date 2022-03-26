<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueGuarantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('que_guarantias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cope');
            $table->string('tecnico');
            $table->string('cliente');
            $table->bigInteger('num_cli');
            $table->integer('liquidacion');
            $table->integer('causa');
            $table->integer('tipo_falla');
            $table->string('accion_tomada');
            $table->date('fecha');
            $table->string('observacion');
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
        Schema::dropIfExists('que_guarantias');
    }
}
