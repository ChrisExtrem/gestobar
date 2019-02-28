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

Route::get('pedido/create/{id}', [
    'as' => 'pedido.create',
    'uses' => 'PedidoController@create'
]);

Route::resource('pedido', 'PedidoController', ['except' => 'create']);

Route::resource('reserva', 'ReservaController');

Route::resource('factura', 'FacturaController');







//Route::post('/pedido/store', 'PedidoController@store')->name('pedido.store'); //llamada desde un botton en main

/*Route::resource('pedido', 'PedidoController')->except([
    'create', 'store', 'update', 'destroy'
]);

Route::post('pedido/store', [
    'as' => 'pedido.store',
    'uses' => 'PedidoController@store'
]);*/
