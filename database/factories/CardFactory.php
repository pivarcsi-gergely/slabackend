<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CardFactory extends Factory
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
<<<<<<< HEAD
            'type' => $this->faker->words(2),
            'details' => $this->faker->words(4),
            'level' => $this->random(),
            'hp' => $this->random(),
            'attack' => $this->random(),
            
=======
            'type' => $this->faker->words(2,true),
            'details' => $this->faker->words(4,true),
            'level' => $this->faker->numberBetween(1,100),
            'hp' => $this->faker->numberBetween(1,100),
            'attack' => $this->faker->numberBetween(1,100),
            'summon_cost' => $this->faker->numberBetween(1,100),
>>>>>>> 5dac0a19b0b468500372c8571ffb446b31a12f7b
        ];
    }
}
