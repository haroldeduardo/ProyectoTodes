<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicacionevento_seeder extends Seeder
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
            'Nombre' => 'saludOcupacional',
            'Descripcion' => 'charla de  salud de la comunidad',
            'FechaHora' => '2022-09-20',
            'Lugar' => 'esmeralda',
            'Estado' => 'activo',
            'UrlExterna' => 'www',
            'Reponsable' => 'jueanes',
            'Fecha_caducidad' => '2022-09-20',
            'Tipo' => 'Evento'


        ]);
    }
}
