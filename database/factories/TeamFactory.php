<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
        'name' => "FoXRaiD " . $faker->lastName,
        'slug' => function(array $post) {
            return str_slug($post['name'], '-');
        },
        'clan_id' => 1,
    ];
});
