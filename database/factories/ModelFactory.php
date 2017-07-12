<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'username'=> $faker->username,
        'avatar'=> $faker->imageUrl(300,300,'people'),
    ];
});

$factory->define(App\Models\Post::class, function(Faker\Generator $faker){
  return [
    'title'=>$faker->sentence(),
    'resume'=>$faker->realText(random_int(20,160)),
    'description'=>$faker->text,
    'imagen'=>$faker->imageUrl(500,338),
    'publish_date' => $faker->dateTimeThisDecade,
    'status' => (1),
    'created_at' => $faker->dateTimeThisDecade,
    'updated_at' => $faker->dateTimeThisDecade,
  ];
});
