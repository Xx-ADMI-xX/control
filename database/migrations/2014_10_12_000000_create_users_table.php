<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_Nombre');
            $table->string('usu_Apellido');
            $table->string('usu_CI')->unique();
            //$table->string('usu_Telefono');
            $table->string('usu_Correo')->unique();
            $table->string('password');
            //$table->string('usu_Roll');
            //$table->integer('usu_Estado');


            $table->timestamps();
            $table->rememberToken();
            $table->timestamp('usu_Verificar_correo')->nullable();
            $table->foreignId('prm_id')->references('prm_id')->on('permisos');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
