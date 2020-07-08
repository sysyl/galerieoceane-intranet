<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'unit_size' => $faker->randomElement($array = array (0,1)),
        'active' => 1,
        'phonenumber_1' => '+33 (0)x xx xx xx xx',
        'emergency_phonenumber_1' => '+33 (0)x xx xx xx xx',
        'shopping_mall_id' => 1,
        'retail_space_id' => $faker->numberBetween($min = 1, $max = 80),
        'product_id' => $faker->numberBetween($min = 1, $max = 6),
    ];
});
