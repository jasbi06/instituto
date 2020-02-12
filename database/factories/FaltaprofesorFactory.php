<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faltaprofesor;
use Faker\Generator as Faker;

$factory->define(Faltaprofesor::class, function (Faker $faker) {
    return [
        'profesor_falta' =>  $faker->numberBetween($min = 1, $max = 100),
        'profesor_guardia' => $faker->randomNumber(),
        'periodoclase_id' => $faker ->numberBetween($min = 1, $max = 6)
    ];
});
