<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Điện thoại di động',
                'description' => 'Các sản phẩm điện thoại thông minh và phụ kiện',
                'is_active' => true
            ],
            [
                'name' => 'Laptop',
                'description' => 'Máy tính xách tay và phụ kiện',
                'is_active' => true
            ],
            [
                'name' => 'Máy tính bảng',
                'description' => 'Các sản phẩm máy tính bảng và phụ kiện',
                'is_active' => true
            ],
            [
                'name' => 'Phụ kiện',
                'description' => 'Các phụ kiện điện tử',
                'is_active' => true
            ]
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'is_active' => $category['is_active']
            ]);
        }
    }
}
