<?php

namespace Database\Factories;

use App\Models\Cursos;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cursos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->paragraph(),
            'inicio' => $this->faker->date(),
            'fin' => $this->faker->date(),
            'departamento' => $this->faker->paragraph(),
            'municipio' => $this->faker->paragraph(),
            'horas' => $this->faker->numberBetween(1,224),
            'modalidad' => $this->faker->paragraph(),
            'tipo_costo' => $this->faker->paragraph(),
            'costo' => $this->faker->paragraph(),
            'n_participantes' => $this->faker->numberBetween(0,100),
            'n_evaluaciones' => $this->faker->numberBetween(0,100),
            'n_contrato' => $this->faker->numberBetween(0,100),
            'orden' => $this->faker->numberBetween(0,100),
            'orden_bolsa' => $this->faker->numberBetween(0,100),
            'item' => $this->faker->numberBetween(0,100),
            'programa' => $this->faker->paragraph(),
            'facilitador' => $this->faker->name,
            
        ];
    }
}
