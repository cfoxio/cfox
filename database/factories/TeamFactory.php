<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' => "FoXRaiD " . $faker->lastName,
        'clan_id' => 1,
    ];
});
