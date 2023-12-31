<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tecnicos>
 */
class TecnicosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     //datafake
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->text(10)
        ];
    }
}
