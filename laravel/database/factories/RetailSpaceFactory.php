<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RetailSpace;
use Faker\Generator as Faker;

$factory->define(RetailSpace::class, function (Faker $faker) {
    return [
        'name' => $faker->text(5),
        'area' => $faker->randomElement($array = array ('W','N','E','S','M')),
        'area_in_squared_meters' => $faker->numberBetween(100, 2000),
        'shopping_mall_id' => 1,
    ];
});
