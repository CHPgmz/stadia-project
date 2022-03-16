<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            /* $table->id(); */
            $table->string('nombre_tec');
            $table->string('apellidos', 50);
            $table->string('pic', 50);
            $table->string('curp', 50)->nullable();
            $table->bigInteger('num_telefono');
            $table->string('correo', 50)->unique();
            $table->string('ine', 50)->nullable();
            $table->string('nss', 50)->nullable();
            $table->string('direccion', 50)->nullable();
            $table->integer('edad', 5);
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
        Schema::dropIfExists('tecnicos');
    }
}
