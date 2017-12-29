<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrazabilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trazabilidads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden_pago_id')->unsigned();
            $table->foreign('orden_pago_id')
                ->references('id')
                ->on('orden_pagos')
                ->onDelete('cascade');

            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')
                ->references('id')
                ->on('prm_estados')
                ->onDelete('cascade');

            $table->integer('registro_request_id')->nullable()->unsigned();
            $table->foreign('registro_request_id')
                ->references('id')
                ->on('registro_requests')
                ->onDelete('cascade');
            $table->longText('detalle');
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
        Schema::dropIfExists('trazabilidads');
    }
}
