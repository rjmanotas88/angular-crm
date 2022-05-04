<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Faker\Factory as Faker;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
/*         foreach (range(1, 20) as $index)  {
            Customer::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'mobile' => $faker->phoneNumber,
                'rewards' => $faker->numberBetween($min = 50, $max = 100),
                'password' => $faker->password ,
                'avatar' => $faker->word,
            ]);
        } */

        $customers = Customer::all();

        $customers->each(function ($customer_update, $key) {
            $customer_update->avatar = 'https://eu.ui-avatars.com/api/?background=random&name='.$customer_update->firstname;
            $customer_update->save();
        });
    }
}
