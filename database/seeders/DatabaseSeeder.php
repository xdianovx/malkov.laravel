<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PageSeeder::class,
        ]);
        $this->call([
            HomePageNumSeeder::class,
        ]);
        $this->call([
            BlockSeeder::class,
        ]);
        $this->call([
            QuestionSeeder::class,
        ]);
        $this->call([
            ServiceSeeder::class,
        ]);
        $this->call([
            PriceSeeder::class,
        ]);
        $this->call([
            SpecializationSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'password' => Hash::make('aspire5745g'),
            'email' => 'test@example.com',
        ]);

    }
}
