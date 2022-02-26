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
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Clave unica del registro de roles');
            $table->string('name')->comment('Nombre de la categoria');
            $table->timestamps();
        });


        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('Clave unica del registro de usuarios');
            $table->string('name')->comment('Nombre completo del usuario');
            $table->string('email')->unique()->comment('Correo electronico');
            $table->timestamp('email_verified_at')->nullable()->comment('Verificacion de correo electronico');
            $table->string('password')->comment('Contraseña');
            $table->integer('role_id')->default('2')->comment('Rol del usiario');
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
        Schema::dropIfExists('users');

        Schema::dropIfExists('roles');
    }
}
