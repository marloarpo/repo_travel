<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Climbers; // Make sure the namespace is correct
use App\Models\Officers;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Officers::factory(5)->create();
    }
}
