<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {
   return [
       'org_name' => $faker->unique()->company,
       'org_url' => $faker->unique()->url,
   ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->jobTitle,
        'job_country' => $faker->countryCode,
        'job_is_remote' => rand(0, 1),
        'job_relocation_assistance' => rand(0, 1),
        'job_description' => $faker->paragraphs(1,true),
        'job_how_to_apply' => $faker->paragraphs(3,false),
        'user_id' => App\User::all()->random()->id,
        'created_at' => $faker->dateTimeBetween('-3 years', 'now'),
    ];
});
