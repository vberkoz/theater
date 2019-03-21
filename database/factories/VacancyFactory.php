<?php

use Faker\Generator as Faker;

$factory->define(App\Vacancy::class, function (Faker $faker) {
    $title = substr($faker->sentence(3), 0, -1);
    return [
        'slug' => Str::slug($title, '-'),
        'title' => $title,
        'body' => $faker->paragraphs(6, true)
    ];
});
