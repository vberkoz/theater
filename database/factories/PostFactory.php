<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = substr($faker->sentence(6), 0, -1);
    return [
        'author_id' => $faker->numberBetween(1, 15),
        'slug' => Str::slug($title, '-'),
        'title' => $title,
        'lead' => substr($faker->sentence(18), 0, -1),
        'body' => $faker->paragraphs(12, true),
        'image_url' => $faker->imageUrl(640, 480)
    ];
});
