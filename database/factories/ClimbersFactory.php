<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Climbers;

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
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'age' => fake() ->numberBetween(18,50),
            'gender' => fake()->randomElement(['Male','Female']),
            'address' => fake() ->address(),
            'email' => fake()->unique()->safeEmail(),
            'citizenship' => fake()->randomElement(['Foreigner','Local']),
            'route' => fake()->randomElement(['Makilala', 'Kapatagan', 'Kidapawan','Sta.Cruz']),
            'status' => fake()->randomElement(['Pending','Approved','Rejected']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
