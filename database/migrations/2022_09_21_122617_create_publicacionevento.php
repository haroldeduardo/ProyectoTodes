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
        Schema::create('publicacionevento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->dateTime("fecha_y_Hora");
            $table->string('lugar');
            $table->enum("estado", ["activo", "inactivo"]);// <-- Aquí el enum
            $table->string('urlExterna');
            $table->string('responsable');
            $table->date('fecha_caducidad');
            $table->enum("tipo", ["noticia", "evento"]);// <-- Aquí  enum

       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacionevento');
    }
};
