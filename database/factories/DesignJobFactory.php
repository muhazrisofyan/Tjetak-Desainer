<?php

use Faker\Generator as Faker;

$factory->define(App\Design_job::class, function (Faker $faker) {
  return [
    'product' => $faker->company,
    'fee' => $faker->numberBetween(10000,1000000),
    'design_file' => $faker->url,
    'design_content' => $faker->text(100),
    'additional_info' => $faker->text(100),
    'deadline' => $faker->dateTime('+30 days'),
    'status' => 'available',
  ];
});
