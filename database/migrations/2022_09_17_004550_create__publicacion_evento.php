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
        Schema::create('_publicacion_evento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre');
            $table->string('Descripcion');
      
            $table->dateTime('FechaHora');
            $table->string('Lugar');
            $table->enum("Estado", ["activo", "inactivo"]);// <-- Aquí el enum
            $table->string('UrlExterna');
            $table->dateTime('Reponsable');
            $table->dateTime('Fecha_caducidad');
            $table->enum("Tipo", ["Noticia", "Evento"]);// <-- Aquí el enum


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_publicacion_evento');
    }
};
