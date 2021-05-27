<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstName,
        'lastname' => $faker -> lastName,
        'role' => $faker -> word,
        'ral' => $faker -> numberBetween(15000, 90000)
    ];
});
