<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $this->call(eventos_seeder::class);
       $this->call(categoria_seeder::class);
       $this->call(UserTableSeeder::class);
       $this->call(publicacionevento_seeder::class);       
       $this->call(comentarios_seeder::class);
       $this->call(archivoevento::class);

    }
}
