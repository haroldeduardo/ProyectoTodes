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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->string ('contenido');
            $table->enum("clasificasion", ["Me interesa", "No me interesa"]);// <-- Aquí el enum
           
            //$table->enum("estado", ["activo", "inactivo"]);// <-- Aquí el enum
            $table->date ('fecha_comentario');

           

            $table->foreignId('id_publicacion')    
            ->constrained('publicacionevento')
            ->cascadeOnDelete();

            $table->foreignId('id_usuario')
            ->constrained('users')
            ->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('comentarios');
    }
};
