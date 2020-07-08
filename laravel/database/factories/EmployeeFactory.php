<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'lastname' => $faker->lastname,
        'firstname' => $faker->firstname,
        'role' => $faker->randomElement($array = array (0,1)),
        'active' => 1,
        'email' => $faker->email,
        'phonenumber' => '+33 (0)x xx xx xx xx',
    ];
});
