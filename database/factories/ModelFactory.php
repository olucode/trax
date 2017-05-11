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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'avatar' => 'avatar/default.jpg',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Song::class, function (Faker\Generator $faker){
    //'genre' => $faker->shuffleArray(['Hip Hop','Pop', 'Rap', 'AfroBeat', 'Electronic','Soul','Reggae','Heavy Metal']),
    //'genre' => $faker->word,
    return [
        'title' => $faker->word,
        'artist' => $faker->name,
        'album' => $faker->word,
        'year' => $faker->numberBetween(1990,2017),
        'producer' => $faker->name,
        'genre' => $faker->randomElement(['Pop', 'Rap', 'AfroBeat', 'Electronic','Reggae','Heavy Metal']),
        'comment' => $faker->sentence,
    ];
});