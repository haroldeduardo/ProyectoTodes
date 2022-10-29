<?php

namespace Database\Factories;
<<<<<<< HEAD
use App\Models\Comentarios;

use Illuminate\Database\Eloquent\Factories\Factory;

=======

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentarios;
>>>>>>> camilo
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentarios>
 */
class ComentariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD

=======
>>>>>>> camilo
    protected  $model = Comentarios::class;
    public function definition()
    {
        return [
            'contenido'=>$this->faker->name(),
            'clasificasion'=>$this->faker->randomElement($array = array ('Me interesa', 'No me interesa')), // 'b',
            'fecha_comentario'=>$this->faker->Date(),
<<<<<<< HEAD
            'id_usuario'=>$this->faker->numberBetween(1,20),
=======
            'id_usuario'=>$this->faker->numberBetween(1,40),
>>>>>>> camilo
            'id_publicacion'=>$this->faker->numberBetween(1,40),

        ];
    }
}
