<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        $this->call(FoodSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(UsersSeed::class);
        $this->call(DrinksSeeder::class);
    }
}