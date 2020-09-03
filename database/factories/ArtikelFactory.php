<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    return [
    'titel' => substr($faker->sentence(2), 0, -1),
    'content' => $faker->paragraph,
    'auteur' => $faker->name,
   ];
});
