<?php

namespace Database\Factories;

use App\Models\Asistencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asistencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dia' => $this->faker->date(),
            'inicio' => $this->faker->paragraph(),
            'fin' => $this->faker->paragraph(),
            'id_curso' => $this->faker->numberBetween(0,6),
    
        ];
    }
}
