<?php

/** @var Factory $factory */

use App\Destination;
use App\Flight;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Flight::class, function (Faker $faker) {
    return [
        'name' => mb_strtoupper(Str::random(3)) . $faker->numberBetween(1000, 9999),
        'origin_id' => function () {
            return factory(Destination::class)->create()->id;
        },
        'destination_id' => function () {
            return factory(Destination::class)->create()->id;
        },
        'arrived_at' => $faker->dateTimeBetween('-1 year', '+1 year'),
    ];
});
