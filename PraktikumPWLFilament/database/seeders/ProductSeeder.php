<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Gaming Pro',
            'sku' => 'LPT-001',
            'description' => 'Laptop gaming dengan performa tinggi.',
            'price' => 15000000,
            'stock' => 10,
            'is_active' => true,
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Mechanical Keyboard RGB',
            'sku' => 'KBD-001',
            'description' => 'Keyboard mekanik dengan lampu RGB.',
            'price' => 750000,
            'stock' => 50,
            'is_active' => true,
            'is_featured' => false,
        ]);

        Product::create([
            'name' => 'Gaming Mouse Wireless',
            'sku' => 'MSE-001',
            'description' => 'Mouse gaming wireless responsif.',
            'price' => 500000,
            'stock' => 100,
            'is_active' => false,
            'is_featured' => false,
        ]);

        Product::create([
            'name' => 'Webcam HD 1080p',
            'sku' => 'WBC-001',
            'description' => 'Webcam jernih untuk streaming.',
            'price' => 450000,
            'stock' => 30,
            'is_active' => true,
            'is_featured' => false,
        ]);

        Product::create([
            'name' => 'Ring Light 10 Inch',
            'sku' => 'LGT-001',
            'description' => 'Lampu ring untuk pencahayaan video.',
            'price' => 150000,
            'stock' => 25,
            'is_active' => true,
            'is_featured' => false,
        ]);
    }
}
