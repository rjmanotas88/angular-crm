<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index)  {
            Product::create([
                'name' => "Product-".$faker->numberBetween($min = 50, $max = 150),
                'stock' => $faker->numberBetween($min = 1, $max = 5),
                'price' => $faker->numberBetween($min = 500, $max = 8000),
            ]);
        }
    }
}
