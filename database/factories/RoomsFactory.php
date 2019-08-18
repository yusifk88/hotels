<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'description' => $faker->text(rand(10,50)),
        'info' => $faker->text(rand(20,200)),
        'bedType' => 'Single Size',
        'price_perDay' => $faker->randomNumber()
    ];
});
