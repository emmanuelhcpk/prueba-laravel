<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_administradors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primer_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_nombre')->nullable();
            $table->string('segundo_apellido')->nullable();
            $table->string('email')->unique();
            $table->boolean('activo')->default(true);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('usuario_administradors');
    }
}
