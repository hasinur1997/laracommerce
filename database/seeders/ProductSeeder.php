<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(20)->create();

        $categories = Category::all();

        Product::all()->each(function($product) use ($categories) {
            $product->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        });
    }
}
