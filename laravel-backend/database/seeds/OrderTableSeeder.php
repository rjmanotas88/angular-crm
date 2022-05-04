<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1, 20) as $index)  {
            Order::create([
                'customerId' => $faker->numberBetween($min = 1, $max = 20),
                'amount' => $faker->numberBetween($min = 1, $max = 5),
                'address' => $faker->address,
                'city' => $faker->city,
                'zipcode' => $faker->numberBetween($min = 100000, $max = 999999),
                'country' => $faker->country,
            ]);
        }

    }
}
