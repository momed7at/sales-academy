<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    $birth_date = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1years','+1 month')->getTimestamp());
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'gender' => $faker->randomElement(array('male','female')),
        'birth_date' =>$birth_date->toDateTimeString(),
        // 'birth_date' =>'1-10-1990',
        'phone' => $faker->mobileNumber,
        'address' => $faker->address,
        'job-title' => $faker->jobTitle,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

    ];
});
