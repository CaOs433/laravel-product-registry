<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder {
    public function run() {
        if (DB::table('products')->count() == 0) {
            DB::table('products')->insert([
                [
                    'name' => 'Camera',
                    'description' => 'Film camera for photography. Uses 35mm film.',
                    'price' => 399.90,
                    'quantity' => 12,
                ],
                [
                    'name' => '35mm Color Film',
                    'description' => 'Color film for 35mm film cameras.',
                    'price' => 12.99,
                    'quantity' => 194,
                ],
                [
                    'name' => '35mm Black and White Film',
                    'description' => 'Black and white film for 35mm film cameras.',
                    'price' => 8.99,
                    'quantity' => 84,
                ],
                [
                    'name' => 'Tripod',
                    'description' => 'Sturdy tripod for stable camera support.',
                    'price' => 59.99,
                    'quantity' => 36,
                ],
                [
                    'name' => 'Camera Bag',
                    'description' => 'Protective bag for camera and accessories.',
                    'price' => 29.99,
                    'quantity' => 68,
                ],
            ]);
        }
    }
}
