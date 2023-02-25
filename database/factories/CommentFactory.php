<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'post_id' => 1,
        'nickname' => $faker->name(),
        'email' => $faker->email(),
        'message' => $faker->sentence(),
    ];
});
