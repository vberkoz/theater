<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'spectacle_id' => $faker->numberBetween(1, 10),
        'worker_id' => $faker->numberBetween(1, 20),
        'title' => $faker->name,
        'display' => $faker->numberBetween(0, 100)
    ];
});
