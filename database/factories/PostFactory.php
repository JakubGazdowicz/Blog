<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(),
        'author' => $faker->name(),
    ];
});
