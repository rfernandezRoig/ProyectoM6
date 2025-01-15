<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalunya>
 */
class CatalunyaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->firstName,
            "comarca" => $this->faker->firstName,
            "provincia" => $this->faker->firstName,
            "descripcio" => $this->faker->firstName,
            "fotos" => $this->faker->firstName,
        ];
    }
}
