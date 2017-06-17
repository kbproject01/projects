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
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// faker for user profile
$factory->define(App\Models\UserProfile::class, function (Faker\Generator $faker) {
    
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        //'dob' =>$faker->dateTimeBetween('1990-01-01','2012-12-31')->format('d/m/y'),
        'dob' => Carbon\Carbon::parse('june 30 1992'),
        'mobile' => 6754321987,
        
        
        
    ];
});

//faker for posts


$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(3),
        'user_id' => App\User::all()->random()->id,
    ];
});

//- faker for comments

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    
    return [
        'comment' => $faker->paragraph(3),
        'user_id' => App\User::all()->random()->id,
        'post_id' => App\Models\Post::all()->random()->id,
    ];
});
