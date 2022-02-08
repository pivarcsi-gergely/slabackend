<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FighterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->words(2),
            'details' => $this->faker->words(4),
            'level' => $this->random(),
            'hp' => $this->random(),
            'attack' => $this->random(),
            'summon_cost' => $this->random(),
        ];
    }
}