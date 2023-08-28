<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guides>
 */
class GuidesFactory extends Factory
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
            'route_origin' => fake()->randomElement(['Makilala', 'Kapatagan', 'Kidapawan','Sta.Cruz']),
            'availability' => fake()->randomElement(['Active','Inactive']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
