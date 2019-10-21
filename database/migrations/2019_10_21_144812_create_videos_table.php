<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('duracion');
            $table->string('descripcion');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('autor_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('autor_id')->references('id')->on('users');
            $table->integer('calificacion')->nullable();
            $table->integer('nro_vistas')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
