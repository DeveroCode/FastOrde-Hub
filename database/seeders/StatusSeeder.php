<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'En proceso'],
            ['name' => 'En preparación'],
            ['name' => 'Listo para entregar!'],
        ]);
    }
}
