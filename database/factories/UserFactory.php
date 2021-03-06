<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'account_number' => $this->faker->numberBetween(1, 1000000000),
            'level' => $this->faker->numberBetween(1, 20),
            'card_count' => $this->faker->numberBetween(1, 7),
            'fighter_count' => 1,
            'admin' => $this->faker->boolean(),
            'banned' => $this->faker->boolean(),
        ];
    }

    /*
      Indicate that the model's email address should be unverified.
     
      @return \Illuminate\Database\Eloquent\Factories\Factory
     
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }*/
}
