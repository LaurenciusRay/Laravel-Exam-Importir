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
$factory->define(App\Event\Event::class, function (Faker\Generator $faker) {

    return [
        'event_name'        => $faker->sentence(3),
        'event_category'    => $faker->randomDigitNot(7),
        'event_location'    => $faker->address,
        'event_date'        => '2020-08-11 00:08:58',
        'event_description' => $faker->paragraph(4),
        'created_at'        => '2020-08-11 00:08:58',
        'updated_at'        => '2020-08-11 00:08:58',
    ];
});

