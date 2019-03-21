<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Spectacle::class, function (Faker $faker) {
    $title = substr($faker->sentence(2), 0, -1);
    
    return [
        'category' => $faker->randomElement(array ('general', 'children')),
        'title' => $title,
        'author' => $faker->name,
        'type' => $faker->words(2, true),
        'duration' => $faker->time('H:i', 'now'),
        'slug' => Str::slug($title, '-'),
        'description' => $faker->paragraphs(3, true),
        'image_url' => $faker->imageUrl(640, 480)
    ];
});
