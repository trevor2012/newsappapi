<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'content' =>$faker->sentence,
        'author_id' => $faker->numberBetween(1, 100),
        'post_id' => $faker->numberBetween(1, 1500),
    ];
});
