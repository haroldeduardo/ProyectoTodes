<?php

namespace Database\Factories;
use App\Models\Categoriamodels;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoriamodelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

   protected  $model = Categoriamodels::class;

    public function definition()
    {
        return [
            
            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->sentence(20)
        ];
    }
}
