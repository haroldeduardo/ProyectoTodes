<?php

namespace Database\Seeders;

use App\Models\Publicacioneventomodels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class publicacionevento_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        Publicacioneventomodels::factory(50)->create();
        Publicacioneventomodels::create([
            'nombre' => 'salud',
            'descripcion' => 'Charla de salud para menores de la comunidad LGTBIQ',
            'fecha_y_hora'=>'2022-01-14 20:22:11',
            'lugar'=>'Popayan',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'Alonso Villa',
            'fecha_caducidad'=>'2023-08-20',
            'tipo'=>'noticia'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'deporte',
            'descripcion' => 'Campeonato relampago para los mayores de edad de la comunidad LGTBIQ',
            'fecha_y_hora'=>'2022-02-14 20:22:12',
            'lugar'=>'La villa',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'Secretaria de Deporte y Cultura',
            'fecha_caducidad'=>'2023-03-22',
            'tipo'=>'noticia'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'Baile deportivo',
            'descripcion' => 'Ven y disfruta de la integracion',
            'fecha_y_hora'=>'2022-03-14 20:20:12',
            'lugar'=>'Puente del Humilladero',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'Secreatia de LGTBIQ',
            'fecha_caducidad'=>'2023-07-17',
            'tipo'=>'noticia'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'Gastronomia',
            'descripcion' => 'Gran encuentro de los mejores chefs de la ciudad Blanca',
            'fecha_y_hora'=>'2022-05-12 20:12:12',
            'lugar'=>'Parque caldas',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'Alcaldia',
            'fecha_caducidad'=>'2023-09-20',
            'tipo'=>'evento'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'Desfile de bailarines',
            'descripcion' => 'concurso de desfile para la comunidad',
            'fecha_y_hora'=>'2022-06-14 20:21:12',
            'lugar'=>'Saldra desde Campanario',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'Alcaldia de Popayan',
            'fecha_caducidad'=>'2023-12-22',
            'tipo'=>'evento'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'Carrera Atletica',
            'descripcion' => 'Ven y participa de este gran concurso',
            'fecha_y_hora'=>'2022-07-12 20:22:12',
            'lugar'=>'salida desde el Hospital San Jose',
            'estado'=>'activo',
            'urlExterna'=>'www',
            'responsable'=>'Alcaldia',
            'fecha_caducidad'=>'2023-02-20',
            'tipo'=>'evento'
        ]);
        Publicacioneventomodels::create([
            'nombre' => 'natacion',
            'descripcion' => 'concurso para menores de la comunidad',
            'fecha_y_hora'=>'2022-08-14 20:21:12',
            'lugar'=>'juegos olimpicos',
            'estado'=>'activo',
            'urlExterna'=>'wow',
            'responsable'=>'Alcaldia de Popayan',
            'fecha_caducidad'=>'2023-11-22',
            'tipo'=>'evento'
        ]);
    }
}
