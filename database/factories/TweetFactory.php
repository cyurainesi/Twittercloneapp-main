<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweet;
use Faker\Generator as Faker;
use League\CommonMark\Block\Element\Paragraph;

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        'user_id'=>factory(App\User::class),
        'body'=>$faker->Paragraph(),
        'image'=>$faker->image('public/images',640,480, null, false),
        'gif'=>$faker->image('public/images',640,480, null, false),
        'replyoption'=>'everyone',
        'scheduring'=>$faker->dateTime(),
    ];
});
