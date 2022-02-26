<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Clave unica del registro de Servicios');
            $table->string('title')->comment('Servicio ofrecido');
            $table->string('duracion')->comment('Duración del servisio');
            $table->unsignedBigInteger('categoria_id')->comment('Clave forania del registro de categorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('precio')->comment('Precio del servicio ofrecido');
            $table->text('detail')->comment('Detalle del servicio');
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
        Schema::dropIfExists('servicios');
    }
}
