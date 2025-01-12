<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarragona>
 */
class TarragonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->firstName,
            "comarca" => \App\Models\Comarca::all()->random()->id,
            "provincia" => \App\Models\Provincia::all()->random()->id,
            "descripcio" => $this->faker->firstName,
            "imatge" => $this->faker->firstName
        ];
    }
}
