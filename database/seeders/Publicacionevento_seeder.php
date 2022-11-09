<?php

namespace Database\Seeders;

use App\Models\Publicacioneventomodels;
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
        Publicacioneventomodels::create([
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
        Publicacioneventomodels::create([
            'nombre' => 'deporte',
            'descripcion' => 'charla de saludos para menores de la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:22:12',
            'lugar'=>'parque caldas',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'rodrigo',
            'fecha_caducidad'=>'2022-09-22',
            'tipo'=>'noticia'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'salud',
            'descripcion' => 'charla de buenos habitos para menores de la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:22:12',
            'lugar'=>'popayan',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'alonso',
            'fecha_caducidad'=>'2022-11-17',
            'tipo'=>'noticia'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'deporte',
            'descripcion' => 'partidos relampagos para la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:22:02',
            'lugar'=>'villa',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'rodrigo',
            'fecha_caducidad'=>'2022-19-18',
            'tipo'=>'noticia'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'salud',
            'descripcion' => 'vacunacion para mayores de la comunidad',
            'fecha_y_Hora'=>'2022-09-12 20:22:12',
            'lugar'=>'Hospital San Jose',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'Alcaldia',
            'fecha_caducidad'=>'2021-09-20',
            'tipo'=>'evento'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'baile',
            'descripcion' => 'concurso para menores de la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:21:12',
            'lugar'=>'juegos olimpicos',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'Alcaldia de Popayan',
            'fecha_caducidad'=>'2022-10-22',
            'tipo'=>'evento'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'carrera atletica',
            'descripcion' => 'vacunacion para mayores de la comunidad',
            'fecha_y_Hora'=>'2022-09-12 20:22:12',
            'lugar'=>'Hospital San Jose',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'Alcaldia',
            'fecha_caducidad'=>'2021-09-20',
            'tipo'=>'evento'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'natacion',
            'descripcion' => 'concurso para menores de la comunidad',
            'fecha_y_Hora'=>'2022-09-14 20:21:12',
            'lugar'=>'juegos olimpicos',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'Alcaldia de Popayan',
            'fecha_caducidad'=>'2022-10-22',
            'tipo'=>'evento'
        ]);
    }
}
