<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            Product::create([
                'user_id' => rand(1, 2),
                'code' => "000{$i}",
                'name' => "Product 0{$i}",
                'quantity' => $i,
                'price' => "10000{$i}",
                'description' => "Description of Product 0{$i}",
            ]);
        }
    }
}
