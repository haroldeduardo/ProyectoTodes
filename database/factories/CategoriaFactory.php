<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoriamodels;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Categoriamodels::class;


    public function definition()
    {
        return [
            'nombre'=>$this->faker->setence(),
            'descripcion'=>$this->faker->paragraph()
        ];
    }
}
