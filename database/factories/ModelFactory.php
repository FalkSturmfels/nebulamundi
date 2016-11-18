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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\World::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->country.'_'.$faker->randomDigit,
        'description' => $faker->text,
        'user_id' => 1,
    ];
});

$factory->define(App\Adventure::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Adventure in '.$faker->country.' '.$faker->randomDigitNotNull,
        'description' => $faker->text,
        'status' => 'INWORK'
    ];
});
