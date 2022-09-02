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
        Schema::create('reporte', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_reporte');
            $table->string('hora_reporte');
            $table->string('lugar_reporte');
             $table->string('nombre_victima');
             $table->string('edad_aprox');
            $table->string('descripcion_reporte');
          //  $table->string('archivo_reporte');

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
        Schema::dropIfExists('reporte');
    }
};
