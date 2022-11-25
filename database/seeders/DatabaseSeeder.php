<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      // $this->call(eventos_seeder::class);
       $this->call(categoria_seeder::class);
       $this->call(Publicacionevento_seeder::class);       
       $this->call(Archivoevento::class);
       $this->call(detallecategoria_seeder::class);
       $this->call(RoleSeeder::class);
       $this->call(UserTableSeeder::class);
       $this->call(Comentario_seeder::class);

    }
}
