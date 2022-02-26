<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Clave unica del registro de citas');

            $table->unsignedBigInteger('categoria_id')->comment('Clave forania del registro de categorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->unsignedBigInteger('title')->comment('Clave forania del registro de Servicios');
            $table->foreign('title')->references('id')->on('servicios');

            $table->unsignedBigInteger('resourceId')->comment('Clave forania del registro de profesionales o expertos');
            $table->foreign('resourceId')->references('id')->on('expertos');

            $table->dateTime('start')->comment('Fecha inicio de la cita');
            $table->dateTime('end')->comment('Fecha fin de la cita');
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
        Schema::dropIfExists('citas');
    }
}
