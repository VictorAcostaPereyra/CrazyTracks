<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Curso\Audio;
use Faker\Generator as Faker;

$factory->define(Audio::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'type'=>$faker->randomElement(['Guitar', 'Keyboard','Bass']),
        'extension'=>$faker->randomElement(['mp3', 'wav','cda']),
        'user_id'=> 1,
    ];
});