<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => str_random(50),
        'precio' => $faker -> randomFloat(2,0,200),

        'categoria_id' => function () {
            return factory(App\Categoria::class)->create()->id;
        },
    ];
});
