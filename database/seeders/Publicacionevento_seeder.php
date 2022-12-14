<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Publicacioneventomodels;

class Publicacionevento_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /*
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
            'tipo'=>'Evento',



        ]);
*/
        DB::table('publicacionevento')->insert
        ([
            'nombre' => 'Muerte de un trans peruano',
            'descripcion' => 'Rodrigo Ventocilla: la polémica muerte de un estudiante de Harvard trans peruano tras ser detenido por la policía en Bali',
            'fecha_y_Hora'=>'2022-11-25 20:22:11',
            'lugar'=>'Indonesia',
            'estado'=>'activo',
            'urlExterna'=>'https://images.pexels.com/photos/9587911/pexels-photo-9587911.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
            'responsable'=>'Secretario de la  comunidad ',
            'fecha_caducidad'=>'2022-11-30',
            'tipo'=>'Noticia',



        ]);



        DB::table('publicacionevento')->insert
        ([
            'nombre' => ' la rebeldia lesbica',
            'descripcion' => 'El 13 de octubre se celebra.',
            'fecha_y_Hora'=>'2022-10-13 00:00:00',
            'lugar'=>'parque  caldas-popayan',
            'estado'=>'activo',
            'urlExterna'=>'https://images.pexels.com/photos/1167034/pexels-photo-1167034.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
            'responsable'=>'Secretario de la  comunidad ',
            'fecha_caducidad'=>'2022-10-13',
            'tipo'=>'Evento',



        ]);






        DB::table('publicacionevento')->insert
        ([
            'nombre' => 'Educando sobre la transfobia: Conozca a Aurora',
            'descripcion' => 'Durante años, la población LGTB+ ha sido excluída o reprimida en el país. Sin embargo, con el auge de las nuevas tecnologías, ',
            'fecha_y_Hora'=>'2022-11-25 00:00:00',
            'lugar'=>'COlombia',
            'estado'=>'activo',
            'urlExterna'=>'https://images.pexels.com/photos/13030035/pexels-photo-13030035.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
            'responsable'=>'Secretario de la  comunidad ',
            'fecha_caducidad'=>'2022-11-27',
            'tipo'=>'Noticia',



        ]);


        DB::table('publicacionevento')->insert
        ([

            'nombre' => 'Gastronomia',
            'descripcion' => 'Gran encuentro de los mejores chefs de la ciudad Blanca',
            'fecha_y_hora'=>'2022-05-12 20:12:12',
            'lugar'=>'Parque caldas',
            'estado'=>'activo',
            'urlExterna'=>'https://images.pexels.com/photos/919194/pexels-photo-919194.jpeg?auto=compress&cs=tinysrgb&w=600',
            'responsable'=>'Alcaldia',
            'fecha_caducidad'=>'2023-09-20',
            'tipo'=>'evento'


        ]);


        DB::table('publicacionevento')->insert
        ([
            'nombre' => 'Desfile de bailarines',
            'descripcion' => 'concurso de desfile para la comunidad',
            'fecha_y_hora'=>'2022-06-14 20:21:12',
            'lugar'=>'Saldra desde Campanario',
            'estado'=>'activo',
            'urlExterna'=>'https://images.pexels.com/photos/1166580/pexels-photo-1166580.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
            'responsable'=>'Alcaldia de Popayan',
            'fecha_caducidad'=>'2023-12-22',
            'tipo'=>'evento'


        ]);


        DB::table('publicacionevento')->insert
        ([
            'nombre' => 'Baile deportivo',
            'descripcion' => 'Ven y disfruta de la integracion',
            'fecha_y_hora'=>'2022-03-14 20:20:12',
            'lugar'=>'Puente del Humilladero',
            'estado'=>'activo',
            'urlExterna'=>'https://images.pexels.com/photos/2306784/pexels-photo-2306784.jpeg?auto=compress&cs=tinysrgb&w=600',
            'responsable'=>'Secreatia de LGTBIQ',
            'fecha_caducidad'=>'2023-07-17',
            'tipo'=>'noticia'



        ]);






        //hhhhhhhhhh
        //Publicacioneventomodels::factory(50)->create();
    }
}
