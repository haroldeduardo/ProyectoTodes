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
        Schema::create('archivosevento', function (Blueprint $table) {
            $table->id();
           $table->string('Ruta');
           $table->foreignId('id_publicacion')
           ->nullable()
           ->constrained('publicacionevento')
           ->cascadeOnDelete()
           ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosevento');
    }
};
