<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *   @var array
     * 
     */
    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *   @return array
     * 
     */
       
    public function definition()
    {
        return [
            'name' =>$this-> faker->sentence(),
            'descripcion' =>$this-> faker->paragraph(),
            'categoria' =>$this-> faker->randomElement(['desarrollo web', 'diseño web'])
        ];
    }
}
