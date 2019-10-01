<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'image' => 'image/LxHd3pRwG6zfRPpZCHmakuB8JqptLoIryQGUaXUo.jpeg',
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = str_slug($name, '-');
    return [
        'name' => $name,
        'slug' => $slug,
        'description' =>$faker->paragraph(30),
        'image' => 'images/NdGuYcycbni8P6DtgKQO3dh53p8oT3mKEMwgU3Cu.jpeg',
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = str_slug($title, '-');
   return [
        'author' => 'Ukpor MFB',
        'title' => $title,
        'slug' => $slug,
        'description' =>$faker->paragraph(30),
        'status' => $faker->randomElements(['Published', 'Draft'])[0],
        'post_count' => $faker->randomDigit,
        'comment_status' => 'open',
        'category' =>'Banking, Public Sector, Accounting',
        'tag' =>'Bank, Public, Sector, Accounting',
        'featured_image' => 'featured_image/LxHd3pRwG6zfRPpZCHmakuB8JqptLoIryQGUaXUo.jpeg',
    ];
});

$factory->define(App\Event::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = str_slug($title, '-');
    $year = rand(2018, 2020);
    $month = rand(1, 12);
    $day = rand(1, 28);

    $date = Carbon\Carbon::create($year,$month ,$day , 0, 0, 0);
   return [
        'title' => $title,
        'slug' => $slug,
        'description' =>$faker->paragraph(30),
        'type' => $faker->randomElements(['Conference', 'Event'])[0],
        'venue' => $faker->address,
        'date_event'  => $date->format('Y-m-d H:i:s'),
        'end_event'  => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
        'featured_image' => 'featured_image/AVWu5l9PPCO52rKc7m3c9DaGe4eR1G7lLaMjm5XY.jpeg',
    ];
});

$factory->define(App\Service::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = str_slug($name, '-');
   return [
        'name' => $name,
        'slug' => $slug,
        'description' =>$faker->paragraph(50),
        'image' => 'image/LxHd3pRwG6zfRPpZCHmakuB8JqptLoIryQGUaXUo.jpeg',
    ];
});