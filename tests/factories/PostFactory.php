<?php

use Magros\BlogPackage\Models\Post;

$factory->define(Post::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'title' => $faker->text,
        'body' => $faker->text
    ];
});