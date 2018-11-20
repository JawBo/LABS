<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
      'validation'=> null,
      'comment'=>$faker->realText(100),
      'users_id'=>$faker->numberBetween($min=1, $max=App\User::all()->count()),
      'date'=>$faker->dateTimeBetween('this week', '+6 days'),
      
    ];
});
