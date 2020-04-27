<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/pizza', function () {
    return view('pizza');
});

Route::get('/pizza','PizzaController@getData');

Route::get('/pizza/get','PizzaController@insert');

