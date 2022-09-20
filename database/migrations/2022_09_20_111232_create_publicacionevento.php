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
            $table->timestamps();
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->Date('FechaHora');
            $table->string('Lugar');
            $table->enum("Estado", ["activo", "inactivo"]);// <-- Aquí el enum
            $table->string('UrlExterna');
            $table->string('Reponsable');
            $table->Date('Fecha_caducidad');
            $table->enum("Tipo", ["Noticia", "Evento"]  );// <-- Aquí el enum
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
