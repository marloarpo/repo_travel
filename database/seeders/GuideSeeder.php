<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guides; // Make sure the namespace is correct

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guides::factory(50)->create();
    }
}
