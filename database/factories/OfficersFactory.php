<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Officers>
 */
class OfficersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'age' => fake() ->numberBetween(18,50),
            'gender' => fake()->randomElement(['Male','Female']),
            'address' => fake() ->address(),
            'email' => fake()->unique()->safeEmail(),
            'municipal' =>fake()->randomElement(['Digos','Kidapawan','Davao','Magpet']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
