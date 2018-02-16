<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('factura_pec');
            $table->string('registro_produce');
            $table->json('carta_responsabilidad_pec');
            $table->string('marca_cilindro');
            $table->string('serie_cilindro');
            $table->string('marca_equipo');
            $table->string('serie_reductor_equipo');
            $table->json('carta_entrega');
            $table->string('manual_usuario');
            $table->json('carta_conformidad');
            $table->string('video');
            $table->string('empresa_certificadora');
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
        Schema::dropIfExists('conversions');
    }
}
