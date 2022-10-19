<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'identificacion'=> '121sd',
            'nombre'=>'joel hernandez',
            'apellidos'=> 'hernandez',
            'genero' => 'masculino',
            'fecha_nacimiento'=> '2022-09-14',
            'email'=>'joel@gmail.com',
            'password'=> '12345mmlklkm'
            

            
        ])->assignRole('Admin');
        User::factory()->count(50)->create();
    }
}
