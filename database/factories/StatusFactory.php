<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Timeline\Status;

$factory->define(Status::class, function (Faker $faker) {
    return [
        'hash' => \Str::random('32'),
        'body' => $faker->sentence(),
        'user_id' => rand(1, 85),
    ];
});
