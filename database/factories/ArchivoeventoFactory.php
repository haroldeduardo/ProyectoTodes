<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Archivoeventomodels;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArchivoeventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected  $model = Archivoeventomodels ::class;
    public function definition()
    {
        return [
            
            'ruta'=>$this->faker->url (),
            'id_publicacion'=>$this->faker->numberBetween(1,40),
        ];
    }
}
