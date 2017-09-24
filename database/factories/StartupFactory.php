<?php

use Faker\Generator as Faker;

$factory->define(startup\Startup::class, function (Faker $faker) {
      return [
          'name' => $faker->name,
          'expire' => $faker->date('Y-m-d'),
          'status' => 'active',
          'filename' => $faker->word.'.jpg',
      ];
});
