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
            $table->Date('FechaHora');
            $table->string('Lugar');
            $table->enum("Estado", ["activo", "inactivo"]);// <-- Aquí el enum
            $table->string('UrlExterna');
<<<<<<< HEAD:database/migrations/2022_09_20_230219_create_publicacionevento_table.php
            $table->string('Reponsable');
            $table->Date('Fecha_caducidad');
            $table->enum("Tipo", ["Noticia", "Evento"]  );
=======
            $table->dateTime('Reponsable');
            $table->dateTime('Fecha_caducidad');
            $table->enum("Tipo", ["Noticia", "Evento"]);// <-- Aquí el enum


>>>>>>> parent of 7b5f065 (se llena los cambioss):database/migrations/2022_09_17_004550_create__publicacion_evento.php
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
