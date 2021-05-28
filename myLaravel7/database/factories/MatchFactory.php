<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
      "team1" => $faker -> word,
      "team2" => $faker -> word,
      "points1" => $faker -> randomDigit,
      "points2" => $faker -> randomDigit,
      "result" => $faker -> boolean,
    ];
});
