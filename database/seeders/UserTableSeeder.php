<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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
            'identificacion'=>'123456',
             'nombre'=>'administrador',
             'apellidos'=>'administrador',
             'genero'=>'femenino',
             'fecha_nacimiento'=>'20-10-08',
             'email'=>'admin@gmail.com',
             'password'=>Hash::make('12345')])->assignRole('Admin');



             User::create([
                'identificacion'=>'9863',
                 'nombre'=>'administrador12',
                 'apellidos'=>'admi',
                 'genero'=>'femenino',
                 'fecha_nacimiento'=>'14-08-11',
                 'email'=>'admin12@gmail.com',
                 'password'=>Hash::make('456789')])->assignRole('Admin');

            User::create([ 
            'identificacion'=> '121sd',
            'nombre'=>'joel hernandez',
            'apellidos'=> 'hernandez',
            'genero' => 'masculino',
            'fecha_nacimiento'=> '2022-09-14',
            'email'=>'joel@gmail.com',
            'password'=> Hash::make('12345mmlklkm')])->assignRole('UserComunidad');

       // User::factory()->count(50)->create();
        
    }
}
