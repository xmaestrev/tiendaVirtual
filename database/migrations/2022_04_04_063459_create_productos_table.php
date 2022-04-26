<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->longText('descripcion');
            $table->string("foto");
            $table->integer("precio");
            $table->integer("valoracion")->nullable();
            $table->integer("stock");
            $table->boolean("publicado");
            $table->foreignId("id_categoria");
            $table->foreign("id_categoria")->references("id")->on("categorias");
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
        Schema::dropIfExists('productos');
    }
};
