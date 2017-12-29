<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('json_request');
            $table->string('orderId')->nullable();
            $table->string('orderCreateDate')->nullable();
            $table->string('customerIp')->nullable();
            $table->string('currencyCode')->nullable();
            $table->string('totalAmount')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('registro_requests');
    }
}
