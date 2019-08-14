<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => "Product {$faker->regexify('[A-Za-z0-9]{5}')} {$faker->numberBetween(0, 9999)}",
        'price' => $faker->numberBetween(1, 5000),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
