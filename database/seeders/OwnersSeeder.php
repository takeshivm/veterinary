<?php

namespace Database\Seeders;

use App\Models\Owners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owners::factory()->count(20)->withFakeData()->create();

    }
}
