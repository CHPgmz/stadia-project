<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_obra');
            $table->string('estatus');
            $table->string('tipo_estatus');
            $table->string('observacion');
            $table->string('tipo_obra');
            $table->string('supervisor');
            $table->date('fecha_inicio');
            $table->date('fecha_terminacion');
            $table->string('dias_laborados');
            $table->string('fecha_compromiso');
            $table->string('doc_fisicos');
            $table->string('fcc');
            $table->string('enviado_factura');
            $table->string('pep');
            $table->string('operacion');
            $table->string('oei');
            $table->string('oe');
            $table->string('acomedida');
            $table->string('ob');
            $table->string('material');
            $table->string('ob_material');
            $table->string('tipo_material');
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
        Schema::dropIfExists('obras');
    }
}
