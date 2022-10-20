<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//importo DB
use App\Models\Categoriamodels;
class Categoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoriamodels::factory(50)->create();/*
        DB::table('categoria')->insert
        (
         [
             'nombre_categoria'=>'amenaza',
             'descripcion_categoria'=>'amenaza a estudiante',
             'tipo_categoria'=> 'reporte'

         ]
        );*/
    }
}
