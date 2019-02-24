<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);*/

        //Seed usando Factorias
        $users = factory(App\User::class, 3)->create();

        $categorias = factory(App\Categoria::class,3) -> create();
        $productos = factory(App\Producto::class,5) -> create();
        $reservas = factory(App\Reserva::class) -> create();
        $pedidos = factory(App\Pedido::class) -> create();

        $facturas = factory(App\Factura::class,2) -> create();
        $lineas = factory(App\Linea::class) -> create();
    }

}
