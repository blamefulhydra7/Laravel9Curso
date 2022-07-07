<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->firstName,
            'apellido' => $this->faker->lastName,
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'nControl' => $this->faker->unique()->hexColor,
            'carrera' => $this->faker->randomElement(['Sistemas', 'Mecatrónica', 'Bioquímica', 'Industrial'])
        ];
    }
}
