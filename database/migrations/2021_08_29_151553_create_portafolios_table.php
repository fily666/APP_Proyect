<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortafoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id')->comment('Clave unica del registro de articulos del portafolio');
            $table->string('name')->comment('Nombre del articulo');
            $table->string('imagen')->comment('Imagen del articulo de la galeria');
            $table->unsignedBigInteger('categoria_id')->comment('Clave forania del registro de categorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->text('detail')->comment('Detalle del articulo en la galeria');
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
        Schema::dropIfExists('portafolios');
    }
}