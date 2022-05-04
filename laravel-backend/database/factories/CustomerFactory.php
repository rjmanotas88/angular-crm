<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'mobile' => $faker->phoneNumber,
        'rewards' => $faker->numberBetween($min = 50, $max = 100),
        'password' => $faker->password ,
        'avatar' => $faker->word,
    ];
});
