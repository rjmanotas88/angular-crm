<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = App\Product::all();
        // Populate the pivot table
        App\Order::all()->each(function ($order) use ($products) { 
            $order->products()->attach(
                $products->random(rand(1, 5))->pluck('id')->toArray()
            ); 
        });
    }
}
