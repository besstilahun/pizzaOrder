<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'pizzaController@index' )->name('pizzas.index')->middleware('auth');

Route::post('/home_page', 'pizzaController@store')->name('pizzas.store');

Route::get('/orderUs' , 'pizzaController@create')->name('pizzas.create');

Route::get('/pizzas/Order/details/{id}', 'pizzaController@show')->name('pizzas.show')->middleware('auth');

Route::delete('/pizzas/DELETE_Order/{id}', 'pizzaController@destroy')->name('pizzas.destory')->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
