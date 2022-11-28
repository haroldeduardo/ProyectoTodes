<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Archivoeventomodels ;
class Archivoevento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('archivoevento')->insert 
        ([
            'ruta' => 'img',
           'id_publicacion'=>'1'


          
        ]);

         
        DB::table('archivoevento')->insert 
        ([
            'ruta' => 'img',
           'id_publicacion'=>'2'


          
        ]);


        DB::table('archivoevento')->insert 
        ([
            'ruta' => 'img',
           'id_publicacion'=>'3'


          
        ]);





        //Archivoeventomodels::factory(50)->create();
    }
}
