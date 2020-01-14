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
        //'anyoescolar' => $faker->unique()->randomNumber(),
        //'nivel' => $faker->unique()->randomNumber(),
        'verificado' => $faker->boolean($chanceOfGettingTrue = 80),
        //'creador' => $faker->unique()->randomNumber()
    ];
});
