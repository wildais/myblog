<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(20),
        'slug' => \Str::slug($faker->sentence(20)),
        'body' => $faker->paragraph()
    ];
});
