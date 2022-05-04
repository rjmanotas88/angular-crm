<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'name' => "Product-".$faker->numberBetween($min = 50, $max = 150),
        'stock' => $faker->numberBetween($min = 1, $max = 5),
        'price' => $faker->numberBetween($min = 500, $max = 8000),
    ];
});
