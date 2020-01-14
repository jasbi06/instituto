<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'fechainicio' => $faker->unique()->date,
        'fechafinal' => $faker->unique()->date,
        //'centro' =>  $faker->unique()->randomNumber,
    ];
});
