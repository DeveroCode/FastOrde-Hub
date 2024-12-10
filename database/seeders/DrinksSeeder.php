<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drinks')->insert([
            'name' => 'Coca-Cola',
            'price' => 20,
            'image' => 'coca_cola.jpg',
            'description' => 'Bebida gaseosa de cola.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Pepsi',
            'price' => 20,
            'image' => 'pepsi.jpg',
            'description' => 'Bebida gaseosa de cola con un sabor diferente.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Agua Mineral',
            'price' => 15,
            'image' => 'agua_mineral.jpg',
            'description' => 'Agua mineral natural, refrescante y sin gas.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Jugo de Naranja',
            'price' => 30,
            'image' => 'orange_juice.jpg',
            'description' => 'Jugo natural de naranja recién exprimido.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Limonada',
            'price' => 25,
            'image' => 'lemonade.jpg',
            'description' => 'Bebida refrescante de limón con azúcar.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Margarita',
            'price' => 120,
            'image' => 'margarita.jpg',
            'description' => 'Cóctel con tequila, limón y licor de naranja.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Mojito',
            'price' => 100,
            'image' => 'mojito.jpg',
            'description' => 'Cóctel refrescante con ron, menta y limón.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Piña Colada',
            'price' => 150,
            'image' => 'pina_colada.jpg',
            'description' => 'Cóctel cremoso con ron, piña y crema de coco.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Cerveza',
            'price' => 35,
            'image' => 'beer.jpg',
            'description' => 'Bebida alcohólica refrescante elaborada con cebada.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Vino Tinto',
            'price' => 120,
            'image' => 'red_wine.jpg',
            'description' => 'Vino tinto de cuerpo medio, ideal para carnes rojas.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Vino Blanco',
            'price' => 130,
            'image' => 'white_wine.jpg',
            'description' => 'Vino blanco seco, ideal para mariscos.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Café Expreso',
            'price' => 40,
            'image' => 'espresso.jpg',
            'description' => 'Café fuerte, ideal para empezar el día.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Capuchino',
            'price' => 50,
            'image' => 'cappuccino.jpg',
            'description' => 'Café con leche espumosa y cacao en polvo.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Smoothie de Fresa',
            'price' => 60,
            'image' => 'strawberry_smoothie.jpg',
            'description' => 'Bebida cremosa y dulce con fresas frescas.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('drinks')->insert([
            'name' => 'Batido de Chocolate',
            'price' => 55,
            'image' => 'chocolate_shake.jpg',
            'description' => 'Batido cremoso de leche y chocolate.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
