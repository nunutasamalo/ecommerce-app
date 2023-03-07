<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(CategorySeeder::class);


        //one category will have 3 products
        Category::factory(3)->create()->each(function ($category) {
            Product::factory(5)->create(['category_id' => $category->id]);
        });

// other option to populate data
        // Category::factory()->count(10)->create();

        // Product::factory()->count(50)->create();


    }
}
