<?php

use Faker\Generator as Faker;

$factory->define(App\Linea::class, function (Faker $faker) {
    return [
        'cantidad' => $faker->randomDigitNotNull(),
        'precio' => $faker -> randomFloat(2,0,200),

        'pedido_id' => function () {
            return factory(App\Pedido::class)->create()->id;
        },

        'producto_id' => function () {
            return factory(App\Producto::class)->create()->id;
        },
    ];
});
