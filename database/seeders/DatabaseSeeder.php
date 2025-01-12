<?php

namespace Database\Seeders;

use App\Models\Barcelona;
use App\Models\Comarca;
use App\Models\Girona;
use App\Models\Lleida;
use App\Models\Provincia;
use App\Models\Tarragona;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Lleida::factory()->times(10)->create();
    }
}
