<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food')->insert([
            'name' => 'Pizza Margherita',
            'price' => 120,
            'image' => 'pizza_margherita.jpg',
            'description' => 'Pizza clásica con tomate, mozzarella y albahaca fresca.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Hamburguesa de Pollo',
            'price' => 80,
            'image' => 'chicken_burger.jpg',
            'description' => 'Jugosa hamburguesa de pollo con lechuga, tomate y mayonesa.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Ensalada César',
            'price' => 60,
            'image' => 'caesar_salad.jpg',
            'description' => 'Ensalada clásica con lechuga romana, crutones y aderezo César.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Tacos al Pastor',
            'price' => 50,
            'image' => 'tacos_al_pastor.jpg',
            'description' => 'Deliciosos tacos con carne al pastor, piña y cilantro.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Spaghetti Bolognese',
            'price' => 100,
            'image' => 'spaghetti_bolognese.jpg',
            'description' => 'Espagueti con salsa boloñesa hecha de carne molida y tomate.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Nuevas comidas agregadas
        DB::table('food')->insert([
            'name' => 'Sushi Rolls',
            'price' => 150,
            'image' => 'sushi_rolls.jpg',
            'description' => 'Rollos de sushi frescos con pescado, arroz y alga nori.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Hot Dog Clásico',
            'price' => 45,
            'image' => 'classic_hotdog.jpg',
            'description' => 'Sándwich de salchicha con mostaza, ketchup y cebolla.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Ramen Japonés',
            'price' => 120,
            'image' => 'japanese_ramen.jpg',
            'description' => 'Sopa de fideos con caldo, carne de cerdo y huevo cocido.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Croquetas de Jamón',
            'price' => 40,
            'image' => 'ham_croquettes.jpg',
            'description' => 'Deliciosas croquetas rellenas de jamón y queso.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Lasagna',
            'price' => 150,
            'image' => 'lasagna.jpg',
            'description' => 'Lasagna casera con capas de pasta, carne, salsa de tomate y queso.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Nachos con Queso',
            'price' => 70,
            'image' => 'nachos_with_cheese.jpg',
            'description' => 'Nachos cubiertos con queso derretido, jalapeños y crema agria.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Papas Fritas',
            'price' => 30,
            'image' => 'french_fries.jpg',
            'description' => 'Papas fritas crujientes, perfectas para acompañar cualquier plato.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('food')->insert([
            'name' => 'Ceviche de Pescado',
            'price' => 90,
            'image' => 'fish_cevice.jpg',
            'description' => 'Ceviche fresco con pescado, jugo de limón, cilantro y cebolla morada.',
            'is_available' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
