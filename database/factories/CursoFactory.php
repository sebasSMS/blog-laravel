<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


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
        $name = $this-> faker->sentence();
        return [
            'name'=> $name,
            'slug' =>Str::slug($name, '-'),
            'descripcion' =>$this-> faker->paragraph(),
            'categoria' =>$this-> faker->randomElement(['desarrollo web', 'diseño web'])
        ];
    }
}
