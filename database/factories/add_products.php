<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      'id' => null,
      'destination' => $faker->sentence($nbWords = 2, $variableNbWords = true),
      'description' => $faker->sentence($nbWords = 15, $variableNbWords = true),
      'price' => $faker->numberBetween(1500, 5000),
      'stay_length' => $faker->numberBetween(5, 21),
      'stock' => $faker->numberBetween(1, 8)
    ];
});
