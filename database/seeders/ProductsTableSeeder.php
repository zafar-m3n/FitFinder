<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clothingBusinessUser = User::where('role', 'clothingbusiness')->first();

        $mensCategory = Category::where('name', 'Men’s Fashion')->first();
        $womensCategory = Category::where('name', 'Women’s Fashion')->first();
        $kidsCategory = Category::where('name', 'Kids’ Fashion')->first();

        // Seed three products
        Product::create([
            'name' => 'Men’s Jacket',
            'description' => 'A stylish and warm jacket for men.',
            'price' => 99.99,
            'stock_quantity' => 50,
            'category_id' => $mensCategory->id,
            'size' => 'L',
            'color' => 'Black',
            'image' => '',
            'created_by' => $clothingBusinessUser->id,
        ]);

        Product::create([
            'name' => 'Women’s Dress',
            'description' => 'A fashionable summer dress for women.',
            'price' => 79.99,
            'stock_quantity' => 30,
            'category_id' => $womensCategory->id,
            'size' => 'M',
            'color' => 'Red',
            'image' => '',
            'created_by' => $clothingBusinessUser->id,
        ]);

        Product::create([
            'name' => 'Kids’ T-shirt',
            'description' => 'A fun and colorful t-shirt for kids.',
            'price' => 19.99,
            'stock_quantity' => 100,
            'category_id' => $kidsCategory->id,
            'size' => 'S',
            'color' => 'Blue',
            'image' => '',
            'created_by' => $clothingBusinessUser->id,
        ]);
    }
}
