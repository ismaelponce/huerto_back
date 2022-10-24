<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Patata',
            'description' => 'Papas ecologicas y deliciosas',
            'price' => 1.40,
            'stock' => 5,
            'photo' => 'assets/imgProductos/papas.png',

        ]);

        DB::table('products')->insert([
            'name' => 'Col',
            'description' => 'Coles nutritivas',
            'price' => 3.40,
            'stock' => 3,
            'photo' => 'assets/imgProductos/col.png'
        ]);

        DB::table('products')->insert([
            'name' => 'Haba',
            'description' => 'Habas frescas de la huerta',
            'price' => 4.00,
            'stock' => 8,
            'photo' => 'assets/imgProductos/habas.png'
        ]);

        DB::table('products')->insert([
            'name' => 'Naranja',
            'description' => 'Naranjas dulces de la huerta',
            'price' => 3.00,
            'stock' => 11,
            'photo' => 'assets/imgProductos/naranjas.png'
        ]);
    }
}
