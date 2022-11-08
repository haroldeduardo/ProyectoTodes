<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Publicacionevento_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicacionevento')->insert 
        ([
            'nombre' => 'salud',
            'descripcion' => 'charla de salud para menores de la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:22:11',
            'lugar'=>'popayan',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'alonso',
            'fecha_caducidad'=>'2022-09-20',
            'tipo'=>'noticia'
        ]);
        ([
            'nombre' => 'deporte',
            'descripcion' => 'charle d saludos para menores de la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:22:12',
            'lugar'=>'parque caldas',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'rodrigo',
            'fecha_caducidad'=>'2022-09-22',
            'tipo'=>'noticia'
        ]);
    }
}
