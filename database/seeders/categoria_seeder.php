<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Categoriamodels;


class categoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categoria')->insert 
        ([
            'nombre' => 'salud',
           'descripcion'=>' charla de salud, prevencion de salud.'


          
        ]);


        DB::table('categoria')->insert 
        ([
            'nombre' => 'deportes',
           'descripcion'=>' futbol,atletismo.'


          
        ]);


        DB::table('categoria')->insert 
        ([
            'nombre' => 'cultura',
           'descripcion'=>' pintura,musica,artesanias'


          
        ]);

       // Categoriamodels::factory(50)->create();
    }
}
