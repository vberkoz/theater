<?php

use Faker\Generator as Faker;

$factory->define(App\Worker::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'department' => $faker->randomElement(array ('management', 'artistic', 'actors', 'ballet', 'orchestra')),
        'display' => $faker->numberBetween(0, 100),
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'image_url' => $faker->imageUrl(640, 480, 'people', true, 'Faker', true),
        'position' => $faker->words(3, true),
        'description' => $faker->paragraphs(3, true)
    ];
});
