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

        DB::table('users')->insert([ //Id: 1
            'name' =>'cliente',
            'email' =>'cliente@gestobar.com',
            'password' =>bcrypt('admin'),
        ]);
            //Seed usando Factorias
            
            // carga de las categorias
            
        DB::table('categorias')->insert([ //Id: 1
            'descripcion'=>'Entradas'
        ]);

        DB::table('categorias')->insert([  //Id: 2
            'descripcion'=>'Platos'
        ]);

        DB::table('categorias')->insert([ //Id: 3
            'descripcion'=>'Postres'
        ]);

        DB::table('categorias')->insert([ //Id: 4
            'descripcion'=>'Bebidas'
        ]);
            
        // Carga de los productos
        
        DB::table('productos')->insert([  //Id: 1
            'nombre'=>'sfijas',
            'descripcion'=>'contiene limon, tomate,cebolla y cantidad 3',
            'precio'=>40.00,
            'imagen'=>'https://i.ibb.co/nw9VgX1/sfijas.jpg',
            'categoria_id'=>'1',
        ]);

        DB::table('productos')->insert([   //Id: 2
            'nombre'=>'empanadas',
            'descripcion'=>'empanadas de pollo,carne, cantidad 3',
            'precio'=>44.50,
            'imagen'=>'https://i.ibb.co/Dw48mr1/empanadas.jpg',
            'categoria_id'=>'1',
        ]);

        DB::table('productos')->insert([  //Id: 3
            'nombre'=>'sopa',
            'descripcion'=>'sopa de verdedura, sopa de pollo',
            'precio'=>34.00,
            'imagen'=>'https://i.ibb.co/NL8gnx8/sopa.jpg',
            'categoria_id'=>'1',
        ]);
            
        DB::table('productos')->insert([  //Id: 4
            'nombre'=>'Matambre al verdeo',
            'descripcion'=>'Este plato estará acompañado con guarnición de papas al horno',
            'precio'=>250.84,
            'imagen'=>' https://i.ibb.co/By1ygbR/matambre-al-verdeo.jpg',
            'categoria_id'=>'2',
        ]);
        
        DB::table('productos')->insert([  //Id: 5
            'nombre'=>'Hamburguesa con Papas fritas',
            'descripcion'=>'Este plato estará acompañado con una promo de una bebida',
            'precio'=>250.84,
            'imagen'=>'https://i.ibb.co/tH629dv/hamburguesa.jpg',
            'categoria_id'=>'2',
        ]);
        
        DB::table('productos')->insert([    //Id: 6
            'nombre'=>'Milanesas Napolitanas',
            'descripcion'=>'Este plato es para dos personas, es una especialidad de la casa',
            'precio'=>450.84,
            'imagen'=>'https://i.ibb.co/x7HyMqh/milanesa-la-napolitana-1.jpg',
            'categoria_id'=>'2',
        ]);
            
        DB::table('productos')->insert([    //Id: 7
            'nombre'=>'Flan',
            'descripcion'=>'flan con caramelo más chocolate',
            'precio'=>70.42,
            'imagen'=>'https://i.ibb.co/428HL26/sopa-de-pollo.jpg',
            'categoria_id'=>'3',
        ]); 
            
        DB::table('productos')->insert([    //Id: 8
            'nombre'=>'Budin',
            'descripcion'=>'Budin de pan con caramelo',
            'precio'=>89.42,
            'imagen'=>'https://i.ibb.co/428HL26/sopa-de-pollo.jpg',
            'categoria_id'=>'3',
        ]);
        
        DB::table('productos')->insert([    //Id: 9
            'nombre'=>'Helado',
            'descripcion'=>'La elección del sabor del helado puede ser, vainilla, frutilla, granizado, limon, dulce de leche',
            'precio'=>69.42,
            'imagen'=>'https://i.ibb.co/2hLYvXQ/flan.jpg',
            'categoria_id'=>'3',
        ]);

        DB::table('productos')->insert([    //Id: 10
            'nombre'=>'Fanta',
            'descripcion'=>'naranja, manzana,uva',
            'precio'=>80.43,
            'imagen'=>'https://i.ibb.co/5WJZWVp/fanta.jpg',
            'categoria_id'=>'4',
        ]);

        DB::table('productos')->insert([    //Id: 11
            'nombre'=>'Sprite',
            'descripcion'=>'Sprite-zero,Sprite-sin azucar',
            'precio'=>90.10,
            'imagen'=>'https://i.ibb.co/QXhLtyP/sprite.jpg',
            'categoria_id'=>'4',
        ]);

        DB::table('productos')->insert([    //Id: 12
            'nombre'=>'Pepsi',
            'descripcion'=>'Pepsi-light',
            'precio'=>95,
            'imagen'=>'https://i.ibb.co/9bdX2L5/pepsi.jpg',
            'categoria_id'=>'4',
        ]);  
        
        DB::table('productos')->insert([    //Id: 13
            'nombre'=>'Vino  Malbec Argentino',
            'descripcion'=>'vino blanco, vino tinto',
            'precio'=>160.45,
            'imagen'=>'https://i.ibb.co/g786Ztv/IMG-20190226-WA0034.jpg',
            'categoria_id'=>'4',
        ]);    
            
            
        // la carga de las reservas
        
        DB::table('reservas')->insert([ //Id: 1
            'cliente'=>' Perez, Juan',
            'mesa'=>3,
            'capacidad'=>5,
            'fecha' => DateTime::createFromFormat('Y-m-d H:i:s', '2019-03-13 22:00:00'),
        ]);

        DB::table('reservas')->insert([ //Id: 2
            'cliente'=>' Laroz, Ian',
            'mesa'=>7,
            'capacidad'=>2,
            'fecha'=>DateTime::createFromFormat('Y-m-d H:i:s', '2019-03-13 22:00:00'),
        ]);

        DB::table('reservas')->insert([ //Id: 3
            'cliente'=>' Paez, Martin',
            'mesa'=>1,
            'capacidad'=>8,
            'fecha'=>DateTime::createFromFormat('Y-m-d H:i:s', '2019-03-13 22:00:00'),
        ]);
            
        //la carga de los pedidos
            
        DB::table('pedidos')->insert([  //Id: 1
            'cliente'=>'Laroz, Ian',
            'mesa'=>7,
            'reserva_id'=>2,
        ]); 
            
        DB::table('pedidos')->insert([   //Id: 2
            'cliente'=>'Paez, martin',
            'mesa'=>1,
            'reserva_id'=>3,
        ]);       

        //Lineas de Pedido/Factura

        DB::table('lineas')->insert([ //Id: 1
            'cantidad'=>2,
            'precio'=>160.45,
            'pedido_id'=>2,
            'producto_id'=>13, //Vino
        ]);

        DB::table('lineas')->insert([ //Id: 2
            'cantidad'=>1,
            'precio'=>89.42,
            'pedido_id'=>2, 
            'producto_id'=>8, //Budin
        ]);

        DB::table('lineas')->insert([ //Id: 2
            'cantidad'=>2,
            'precio'=>450.84,
            'pedido_id'=>2,
            'producto_id'=>6,   //Milanesas
        ]);

        DB::table('lineas')->insert([ //Id: 2
            'cantidad'=>3,
            'precio'=>40.00,
            'pedido_id'=>2,
            'producto_id'=>1,   //Sfijas
        ]);

        //la generación de una Factura
            
        DB::table('facturas')->insert([ //Id: 1
            'cliente'=>'Paez, martin',
            'pedido_id'=>2,
            'fecha'=>DateTime::createFromFormat('Y-m-d H:i:s', '2019-03-13 22:00:00'),
            'total'=>4500.32,  //dudas con el total como indicar el total
        ]);
    }

}
