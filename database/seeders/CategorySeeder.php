<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Manually define the user who will be the creator for now
        $userId = 1; // Replace with an actual user ID in your system

        Category::create([
            'name' => 'Men’s Fashion',
            'description' => 'Clothing and accessories for men.',
            'status' => true,
            'created_by' => $userId,
        ]);

        Category::create([
            'name' => 'Women’s Fashion',
            'description' => 'Clothing and accessories for women.',
            'status' => true,
            'created_by' => $userId,
        ]);

        Category::create([
            'name' => 'Kids’ Fashion',
            'description' => 'Clothing and accessories for kids.',
            'status' => true,
            'created_by' => $userId,
        ]);
    }
}
