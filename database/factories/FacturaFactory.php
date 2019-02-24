<?php

use Faker\Generator as Faker;

$factory->define(App\Factura::class, function (Faker $faker) {
    return [
        'total' => $faker->randomFloat(2,0,200),

        'pedido_id' => function () {
            return factory(App\Pedido::class)->create()->id;
        },
    ];
});
