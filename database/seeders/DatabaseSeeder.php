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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      
       // $this->call(Evento_seeder::class);
   //    $this->call(UserTableSeeder_seeder::class);
     //  $this->call(Comentario_seeder::class);
       $this->call(categoria_seeder::class);
       $this->call(UserTableSeeder::class);
       $this->call(Archivoevento::class);
       $this->call(publicacionevento_seeder::class);       
  //     $this->call(comentarios_seeder::class);
      
    }
}
