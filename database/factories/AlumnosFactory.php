<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumnos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'AlumnoId' => $this->faker->unique()->randomNumber(4),
            'Nombre' => $this->faker-> name(),
            'email' => $this->faker->email(),
            'Direccion' => $this->faker->address(),
            'Ciudad' => $this->faker-> city(),
            'Estado' => $this->faker-> state(),
            'CodPos'=> $this->faker->randomNumber(5)
        ];
    }
}
