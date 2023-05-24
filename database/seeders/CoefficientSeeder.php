<?php

namespace Database\Seeders;

use App\Models\Coefficient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoefficientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coefficient::factory()->count(1)->create();
    }
}
