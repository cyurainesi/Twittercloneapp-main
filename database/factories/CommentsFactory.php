<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'user_id'=>factory(App\User::class),
        'tweet_id'=>factory(App\Tweet::class),
        'comment'=>$faker->paragraph(),
        'image'=>$faker->image('public/images',640,480, null, false),
        'gif'=>$faker->image('public/images',640,480, null, false),
        'replyoption'=>'everyone',
    ];
});
