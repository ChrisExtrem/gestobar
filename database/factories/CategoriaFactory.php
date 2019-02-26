<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
        'descripcion' => str_random(8)
    ];
});
