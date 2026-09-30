<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan baris ini

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foods')->insert([
            [
                'name' => 'nasi goreng spesial',
                'category' => 'Makanan',
                'price' => 25000,
                'description' => 'nasi goreng dengan telur, ayam swir dan',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'mie goreng seefood',
                'category' => 'Makanan',
                'price' => 28000,
                'description' => 'mie goreng pedas dengan udang dan cumi',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'es teh manis',
                'category' => 'Minuman',
                'price' => 5000,
                'description' => 'es teh melati segar',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'jus alpukat',
                'category' => 'Minuman',
                'price' => 15000,
                'description' => 'jus alpukat murni dengan susu cokelat',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'kentang goreng',
                'category' => 'cemilan',
                'price' => 12000,
                'description' => 'kentang goreng renyah dengan saus keju',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
        
        