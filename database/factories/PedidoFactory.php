<?php

use Faker\Generator as Faker;

$factory->define(App\Pedido::class, function (Faker $faker) {
    return [
        'cliente' => $faker->name(),
        'mesa' =>  $faker->randomDigitNotNull(),

        'reserva_id' => function () {
            return factory(App\Reserva::class)->create()->id;
        },
    ];
});
