<?php

namespace Database\Factories;

use App\Models\Comentarios;
use Illuminate\Database\Eloquent\Factories\Factory;

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

    protected  $model = Comentarios::class;
    public function definition()
    {
        return [
            'contenido'=>$this->faker->name(),
            'clasificasion'=>$this->faker->randomElement($array = array ('Me interesa', 'No me interesa')), // 'b',
            'fecha_comentario'=>$this->faker->Date(),

            'id_usuario'=>$this->faker->numberBetween(1,40),
            'id_publicacion'=>$this->faker->numberBetween(1,40),

        ];
    }
}
