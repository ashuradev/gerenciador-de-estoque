<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'price' => $faker->randomNumber(2),
        'description' => $faker->text,
        'vendor' => $faker->company
    ];
});
