<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Word;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Word::factory(10)->create();

        Word::factory()->create([
            'word1' => 'Oignon',
            'word2' => 'l\'ail',
        ]);
    }
}
