<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionsTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('notificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asunto');
            $table->longText('mensaje');
            $table->integer('orden_pago_id')->unsigned();
            $table->foreign('orden_pago_id')
                ->references('id')
                ->on('orden_pagos')
                ->onDelete('cascade');
            $table->timestamps();//fechas
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacions');
    }
}
