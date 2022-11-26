<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Detallecategoriaomodels;

class detallecategoria_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('detallecategoria')->insert 
        ([
            'prioridad' => 'Principal',
            'id_publicacion' => '1',
            'id_categoria' => '1',


            
        ]);





        DB::table('detallecategoria')->insert 
        ([
            'prioridad' => 'Principal',
            'id_publicacion' => '2',
            'id_categoria' => '2',


            
        ]);


        //Detallecategoriaomodels ::factory(50)->create();
        
    
    }
}
