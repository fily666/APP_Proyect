<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expertos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Clave unica del registro de profesionales o expertos');
            $table->string('title')->comment('Nombre del profesional');
            $table->string('cargo')->comment('Cargo del profesional');
            $table->unsignedBigInteger('categoria_id')->comment('Clave forania del registro de categorias');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('foto')->comment('Foto del profesional');
            $table->text('detail')->comment('NPerfil del profesional');
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
        Schema::dropIfExists('expertos');
    }
}
