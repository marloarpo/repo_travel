<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Climbers; // Make sure the namespace is correct

class ClimberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Climbers::factory(30)->create();
    }
}
