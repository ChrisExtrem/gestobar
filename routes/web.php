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

Route::get('/principal', 'HomeController@principal')->name('principal');

Route::get('/usuario', 'HomeController@usuario')->name('usuario');

Route::resource('pedido', 'PedidoController');
