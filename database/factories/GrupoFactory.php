<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'curso' => $faker->randomNumber(),
        'letra' => $faker->randomLetter,
        'nombre' => $faker->company,
        //'tutor' => $faker->randomNumber(),
        //'anyoescolar' => $faker->numberBetween($min = 1, $max = 3),
        //'nivel' => $faker->unique()->randomNumber(),
        'verificado' => $faker->boolean($chanceOfGettingTrue = 80),
        //'creador' =>$faker->numberBetween($min = 1, $max = 100)
    ];
});
