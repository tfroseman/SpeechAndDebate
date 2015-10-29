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
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'school_id' => $faker->numberBetween(1,3),
        'edit_level' => $faker->numberBetween(0,1)
    ];
});


$factory->define(App\School::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    $categ = \App\Http\Utilities\Categories::all();
    $keys = array_keys($categ);
    return [
        'name' => $faker->name,
        'grade' => \App\Http\Utilities\Grade::all()[rand(0,5)],
        'category' => array_get($categ,$keys[rand(0,17)],"oo"),
        'school_id' => 1,
    ];
});