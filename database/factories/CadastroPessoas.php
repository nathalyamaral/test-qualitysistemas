<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'data_nascimento' => generateDateOfBirth(),
        'email' => $faker->unique()->safeEmail,
        'foto' => $faker->imageUrl(250, 250),
        'is_active' => rand(0, 1) == 1,
    ];
});
