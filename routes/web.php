<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/registr', function () {
    return view('registr');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/submit','LoginController@submit');

Route::post('/registr/submit','RegistrController@registr');

Route::get('/pizza', function () {
    return view('pizza');
});

Route::get('/pizza','PizzaController@getData');

Route::get('/pizza/get','PizzaController@insert');

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/basket','PizzaController@getOrders');

Route::get('/basket/inc/{id}', 'PizzaController@inc')->name('basket/inc');

Route::get('/basket/dec/{id}', 'PizzaController@dec')->name('basket/dec');
