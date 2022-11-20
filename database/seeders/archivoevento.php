<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        //Archivoeventomodels::factory(50)->create();
        Archivoeventomodels::create([
        'ruta'=>'https://images.pexels.com/photos/919194/pexels-photo-919194.jpeg?auto=compress&cs=tinysrgb&w=600'
        ]);
        Archivoeventomodels::create([
        'ruta'=>'https://images.pexels.com/photos/2306784/pexels-photo-2306784.jpeg?auto=compress&cs=tinysrgb&w=600'
        ]);
           
            Archivoeventomodels::create([
                'ruta'=>'https://images.pexels.com/photos/1167034/pexels-photo-1167034.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
                ]);
            Archivoeventomodels::create([
            'ruta'=>'https://images.pexels.com/photos/9587911/pexels-photo-9587911.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load'
             ]);
             Archivoeventomodels::create([
             'ruta'=>'https://images.pexels.com/photos/13030035/pexels-photo-13030035.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load'
             ]);
             Archivoeventomodels::create([
             'ruta'=>'https://images.pexels.com/photos/1166580/pexels-photo-1166580.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load'
             ]);
    }
}
