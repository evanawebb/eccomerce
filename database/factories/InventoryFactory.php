<?php

use Faker\Generator as Faker;

$factory->define(App\Inventory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'brand' => $faker->name,
        'lotNumber' => random_int(0, 10),
        'color' => $faker->colorName,
        'image' => $faker->imageUrl
    ];
});
