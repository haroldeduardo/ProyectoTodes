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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      
       // $this->call(Evento_seeder::class);
   //    $this->call(UserTableSeeder_seeder::class);
     //  $this->call(Comentario_seeder::class);
       $this->call(categoria_seeder::class);
       $this->call(UserTableSeeder::class);
       $this->call(archivoevento_seeder::class);
       $this->call(publicacionevent_seeder::class);       
  //     $this->call(comentarios_seeder::class);

      // $this->call(eventos_seeder::class);
       $this->call(categoria_seeder::class);
       $this->call(detallecategoria_seeder::class);
       $this->call(RoleSeeder::class);
       $this->call(UserTableSeeder::class);
       $this->call(Comentario_seeder::class);

    }
}
