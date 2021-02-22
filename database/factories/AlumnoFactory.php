<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_curso' => $this->faker->paragraph(),
            'nombres' => $this->faker->paragraph(),
            'apellidos' => $this->faker->paragraph(),
            'dui' => $this->faker->paragraph(),
            'edad' => $this->faker->paragraph(),
            'ciudad' => $this->faker->paragraph(),
            'escolaridad' => $this->faker->paragraph(),
        ];
    }
}
