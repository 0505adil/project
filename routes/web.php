<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	Auth::logout();
    return view('home');
})->name('home');

Route::get('/registr', function () {
    return view('Auth.registr');
});
Route::get('/log', function () {
    return view('Auth.login');
})->name('log');

Route::get('/pizza', function () {
    return view('pizza');
});

Route::get('/pizza','PizzaController@getData');

Route::get('/pizza/get','PizzaController@insert');

Auth::routes();

Route::group( ['middleware' => 'auth', 'before' => 'auth' ],  function()
{
	   	Route::get('/basket', function () {
	    return view('basket');
	});

	Route::get('/basket','PizzaController@getOrders');

	Route::get('/basket/inc/{id}', 'PizzaController@inc')->name('basket/inc');

	Route::get('/basket/dec/{id}', 'PizzaController@dec')->name('basket/dec');
});