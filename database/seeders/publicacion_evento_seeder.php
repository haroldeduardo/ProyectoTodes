<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class publicacion_evento_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_publicacion_evento')->insert 
        ([
            'Nombre' => 'saludOcupacional',
            'Descripcion' => 'charla de  salud de la comunidad',
            'FechaHora' => '2022-09-21 21:18:28',
            'Lugar' => 'esmeralda',
            'Estado' => 'activo',
            'UrlExterna' => 'www',
            'Reponsable' => 'jueanes',
            'Fecha_caducidad' => '2022-16-09',
            'Tipo' => 'Evento'


        ]);
        //
    }
}
