<?php

use Faker\Generator as Faker;

$factory->define(App\Pedido::class, function (Faker $faker) {
    return [
        //'cliente' => str_random(100),
        //'mesa' => numberBetween(1,20)
    ];
});
