<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Archivoeventomodels ;


class archivoevento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Archivoeventomodels::factory(50)->create();

       /* DB::table('archivoevento')->insert 
        ([
            'ruta'=>'https\\\sss',
           
        ]);*/
    }
}
