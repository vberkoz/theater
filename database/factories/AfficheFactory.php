<?php

use Faker\Generator as Faker;

$factory->define(App\Affiche::class, function (Faker $faker) {
    $year = '2019';
    $month = $faker->numberBetween(3, 4);
    $month < 10 ? $month = '0'.$month : $month;
    $day = $faker->numberBetween(1, 31);
    $day < 10 ? $day = '0'.$day : $day;
    $time = $faker->randomElement(array ('12:00:00', '18:30:00'));
    return [
        'spectacle_id' => $faker->numberBetween(1, 10),
        'starts_at' => $year.'-'.$month.'-'.$day.' '.$time
    ];
});
