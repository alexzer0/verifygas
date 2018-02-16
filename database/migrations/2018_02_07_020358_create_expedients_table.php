<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('taller_id');
            $table->integer('cliente_id');
            $table->integer('evaluation_economy_id');
            $table->integer('evaluation_technical_id');
            $table->integer('confirmation_id');
            $table->integer('conversion_id');
            $table->enum('status',['soltero','casado','divorciado','viudo']);
            $table->datetimeTz('date_send_calidda');
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
        Schema::dropIfExists('expedients');
    }
}
