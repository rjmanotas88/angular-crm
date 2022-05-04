<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = App\Category::all();
        // Populate the pivot table
        App\Product::all()->each(function ($product) use ($category) { 
            $product->categories()->attach(
                $category->random(rand(1, 2))->pluck('id')->toArray()
            ); 
        });
    }
}
