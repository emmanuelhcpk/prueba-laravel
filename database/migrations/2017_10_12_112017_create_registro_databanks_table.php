<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroDatabanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_databanks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden_pago_id')->unsigned();
            $table->foreign('orden_pago_id')
                ->references('id')
                ->on('orden_pagos')
                ->onDelete('cascade');
            $table->longText('json_envio');
            $table->longText('respuesta');
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
        Schema::dropIfExists('registro_databanks');
    }
}
