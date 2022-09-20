<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//importo DB

class Categoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert
        (
         [
             'nombre_categoria'=>'amenaza',
             'descripcion_categoria'=>'amenaza a estudiante',
             'tipo_categoria'=> 'reporte'

         ]
        );
    }
}
