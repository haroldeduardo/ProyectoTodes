<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comentarios;
class comentarios_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert 
        ([
            'contenido' => 'es  importante  el  evento de  salud',
            'clasificasion'=>'Me interesa',
            'fecha_comentario'=>'2022-11-25',
            'id_publicacion'=>'1',
            'id_usuario'=>'1'


          
        ]);




        //Comentarios::factory(50)->create();
    }
}
