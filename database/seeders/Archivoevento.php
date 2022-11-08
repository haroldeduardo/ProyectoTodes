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
        Archivoeventomodels::create([
        'ruta'=>'https://rickandmortyapi.com/api/character/avatar/2.jpeg'
        ]);

        Archivoeventomodels::create([
            'ruta'=>'https://rickandmortyapi.com/api/character/avatar/361.jpeg'
            ]);
    }
}
