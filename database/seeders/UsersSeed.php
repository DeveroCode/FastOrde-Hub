<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Saúl',
            'email' => 'devsaul@devero.com',
            'password' => Hash::make('password'),
            'rol' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'carlos@devero.com',
            'password' => Hash::make('password'),
            'rol' => 'user'
        ]);
    }
}
