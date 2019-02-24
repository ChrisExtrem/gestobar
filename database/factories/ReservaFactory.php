<?php

use Faker\Generator as Faker;

$factory->define(App\Reserva::class, function (Faker $faker) {
    return [

        'cliente' => $faker->name,
        'mesa' => $faker->randomDigitNotNull(),
        'capacidad' => $faker->randomDigitNotNull(),
        'fecha' => now()
    ];
});
