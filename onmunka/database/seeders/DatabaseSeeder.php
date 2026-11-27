<?php

namespace Database\Seeders;

use App\Models\characters;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(12)->create();
        characters::factory(12)->create();

        User::factory()->create([
            'username' => 'Test User',
            'rank' => '600'
        ]);
    }
}
