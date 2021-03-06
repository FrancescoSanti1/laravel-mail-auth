<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence(2),
        'subtitle' => $faker -> sentence(3),
        'rating' => $faker -> numberBetween(1,5)
    ];
});
