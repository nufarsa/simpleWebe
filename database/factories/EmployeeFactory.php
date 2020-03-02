<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});


$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'emp_name' => $faker->name,
        'emp_age'   => $faker->numberBetween($min = 18, $max = 50)
    ];
});