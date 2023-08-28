<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Climbers>
 */
class ClimbersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone_number' => fake()->phoneNumber(),					
            'first_name' => fake()->firstName(),					
            'last_name' => fake()->lastName(),					
            'age' => fake()->numberBetween(),					
            'gender' => fake()->randomElement(['Male','Female']),					
            'address' => fake()->address(),					
            'email'=> fake()->unique()->safeEmail(),					
            'citizenship' => fake()->randomElement(['Foreigner','Local']),
            'created_at' => now(),
            'updated_at' => now(),					
        ];
    }
}
