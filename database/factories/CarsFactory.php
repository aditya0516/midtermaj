<?php

use Faker\Generator as Faker;


        $factory->define(App\car::class, function (Faker $faker) {
            return [
                'Make' => $faker->randomElement($array = array ('honda','ford','toyota')),
                'Model' => $faker->randomLetter,
                'year' => $faker->numberBetween($min = 1920, $max = 2018),
            ];
        });



//$factory->define(Model::class, function (Faker $faker) {
  //  return [
        //
    //];
//});
