<?php

namespace Database\Factories;
use App\Models\Publicacioneventomodels;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacioneventomodels>
 */
class PublicacioneventomodelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected  $model = Publicacioneventomodels::class;
    public function definition()
    {
        return [
            
            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->sentence(20),
            'fecha_y_Hora'=>$this->faker->DateTime(),
            'lugar'=>$this->faker->address (),
          
            'estado'=>$this->faker->randomElement($array = array ('activo', 'inactivo')), // 'b',
            'urlExterna'=>$this->faker->sentence (20),
            'responsable'=>$this->faker->name (20),
            'fecha_caducidad'=>$this->faker->Date(),
            'tipo'=>$this->faker->randomElement($array = array ('noticia', 'evento')), // 'b',
 



        ];
    }
}
