<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('dades.json'));
        $dades = json_decode($json, true);

        foreach ($dades as $poble) {
            DB::table('pobles')->insert([
                'municipi' => $poble['municipi'],
                'comarca' => $poble['comarca'],
                'provincia' => $poble['provincia'],
                'descripcio' => $poble['descripcio'],
                'imatge' => $poble['imatge'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
