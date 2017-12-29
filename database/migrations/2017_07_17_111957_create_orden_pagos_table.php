<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificador');
            $table->string('numero_celular');
            $table->string('correo_electronico');
            $table->string('nombre_usuario');
            $table->double('valor_compra')->nullable();
            $table->double('valor_comision')->nullable();
            $table->double('valor_total')->nullable();
            $table->double('valor_asumido_usuario')->nullable();
            $table->double('valor_asumido_coins')->nullable();
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
        Schema::dropIfExists('orden_pagos');
    }
}
