<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Detallecategoriamodels;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetallecategoriamodelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected  $model = Detallecategoriamodels::class;
    public function definition()
    {
        return [
             
            'id_publicacion'=> $this->faker->numberBetween(1,20),
            'id_publicacion'=> $this->faker->numberBetween(1,20),
        ];
    }
}
