<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Publicacioneventomodels;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PublicacioneventosFactory extends Factory
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
