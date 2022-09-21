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
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->dateTime("Fecha_y_Hora");
            $table->string('Lugar');
            $table->enum("Estado", ["activo", "inactivo"]);// <-- Aquí el enum
            $table->string('UrlExterna');
            $table->string('Responsable');
            $table->date('Fecha_caducidad');
            $table->enum("Tipo", ["noticia", "evento"]);// <-- Aquí  enum

       
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
