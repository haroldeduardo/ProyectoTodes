<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Archivoeventomodels ;
use App\Models\Publicacioneventomodels;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archivoeventomodels>
 */
class ArchivoeventomodelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     * 
     */

    protected  $model = Archivoeventomodels ::class;
    public function definition()
    {
        return [
            
           'ruta'=>$this->faker->url (),
            'id_publicacion'=> $this->faker->numberBetween(1,20)

            
            
        ];
    }
}
