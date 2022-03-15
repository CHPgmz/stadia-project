<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->bigInteger('telefono_cli');
            $table->string('cliente');
            $table->string('nombre_tecnico');
            $table->string('pic');
            $table->string('alfa');
            $table->string('folio_pisa');
            $table->string('folio_pixaplex');
            $table->string('os');
            $table->string('dtto');
            $table->string('observaciones');
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
        Schema::dropIfExists('quejas');
    }
}
