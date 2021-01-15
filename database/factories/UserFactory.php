<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => 'admin',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    ];
});
$factory->define(Article::class, function (Faker $faker) {
    return [
        // 'id'=>,
        'title' => $faker->name,
        'desc' => $faker->text, 
        'extra' => $faker->text, 
        'more' => $faker->text, 
        'state' => 1, 
        'type' => 'article', 
        'multi' => 0, 
        // 'image' => '', 
    ];
});
// $factory->define(Article::class, function (Faker $faker) {
//     return [
//         // 'id'=>10004,
//         'title' => $faker->name,
//         'desc' => $faker->text, 
//         'extra' => $faker->text, 
//         'more' => $faker->text, 
//         'state' => 1, 
//         'type' => 'slider', 
//         'multi' => 0, 
//         // 'image' => '[]', 
//     ];
// });
