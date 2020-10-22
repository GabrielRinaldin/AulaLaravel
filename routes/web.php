<?php

use Illuminate\Support\Facades\Route;


Route::get('usuarios', 'App\Http\Controllers\UserController@index');

Route::get('clientes', 'App\Http\Controllers\ClientesController@index');

Route::get('clientes/novo', 'App\Http\Controllers\ClientesController@novo');


Route::group(['middleware' => 'web'], function()
{
    Route::get('/', 'App\Http\Controllers\HomeController@index');

    Route::auth();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

