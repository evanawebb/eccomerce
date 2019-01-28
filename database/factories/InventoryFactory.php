<?php

use Faker\Generator as Faker;

$factory->define(App\Inventory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'brand' => $faker->name,
        'lotNumber' => (string) random_int(0, 10),
        'color' => $faker->colorName,
        'image' => $faker->imageUrl,
        'gender' => null,
        'notes' => null
    ];
});
