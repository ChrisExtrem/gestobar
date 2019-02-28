<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    if(Auth::check())
    {
        return view('usuario');
    }else{
        return view('principal');
    }

});*/

Route::get('/',function(){
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@buscar')->name('buscar'); //llamada desde un botton en main

//Route::post('/home', 'HomeController@buscarPedido')->name('home.buscarPedido'); //llamada desde un botton en main

//Route::get('/home', 'HomeController@buscarFactura')->name('home.buscarFactura'); //llamada desde un botton en main

Route::get('pedido/create/{id}', [ //ruta con parametros
    'as' => 'pedido.create', //ubicacion de la vista
    'uses' => 'PedidoController@create'  //Controlador@funcion
]);

Route::resource('pedido', 'PedidoController', ['except' => 'create']);

