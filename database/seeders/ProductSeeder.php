<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Điện thoại di động
            [
                'name' => 'iPhone 15 Pro Max',
                'description' => 'iPhone 15 Pro Max 256GB - Thiết kế titan, camera 48MP',
                'price' => 34990000,
                'stock' => 50,
                'category_id' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Samsung Galaxy S24 Ultra',
                'description' => 'Samsung Galaxy S24 Ultra 512GB - Màn hình Dynamic AMOLED 2X',
                'price' => 32990000,
                'stock' => 45,
                'category_id' => 1,
                'is_active' => true
            ],
            // Laptop
            [
                'name' => 'MacBook Pro M3',
                'description' => 'MacBook Pro 14 inch M3 Pro 18GB/512GB',
                'price' => 49990000,
                'stock' => 30,
                'category_id' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Dell XPS 15',
                'description' => 'Dell XPS 15 9530 i7/16GB/512GB',
                'price' => 42990000,
                'stock' => 25,
                'category_id' => 2,
                'is_active' => true
            ],
            // Máy tính bảng
            [
                'name' => 'iPad Pro M2',
                'description' => 'iPad Pro 12.9 inch M2 256GB WiFi',
                'price' => 29990000,
                'stock' => 40,
                'category_id' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Samsung Galaxy Tab S9',
                'description' => 'Samsung Galaxy Tab S9 12.4 inch 256GB',
                'price' => 24990000,
                'stock' => 35,
                'category_id' => 3,
                'is_active' => true
            ],
            // Phụ kiện
            [
                'name' => 'AirPods Pro 2',
                'description' => 'AirPods Pro 2 với MagSafe Charging Case',
                'price' => 6990000,
                'stock' => 100,
                'category_id' => 4,
                'is_active' => true
            ],
            [
                'name' => 'Samsung Galaxy Watch 6',
                'description' => 'Samsung Galaxy Watch 6 44mm LTE',
                'price' => 8990000,
                'stock' => 60,
                'category_id' => 4,
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'category_id' => $product['category_id'],
                'is_active' => $product['is_active']
            ]);
        }
    }
}
