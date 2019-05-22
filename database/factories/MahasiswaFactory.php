<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
    return [
       'name' => $faker->name,
       'address' => $faker->name,
       'age' => $faker->numberBetween(10, 50),

    ];
});
