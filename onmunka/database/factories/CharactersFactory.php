<?php

namespace Database\Factories;

use App\Models\characters;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<characters>
 */
class CharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->userName(),
            'lane' => fake()->randomElement(['green','yellow','blue']),
            'type' => fake()->randomElement(['spirit','gun','melee']),
            'respawning' => fake()->boolean(68),
        ];
    }
}
