<?php

use Illuminate\Support\Facades\Route;


Route::get('usuarios', 'App\Http\Controllers\UserController@index');


Route::group(['middleware' => 'web'], function()
{
    Route::get('/', 'App\Http\Controllers\HomeController@index');
    Route::auth();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('clientes', 'App\Http\Controllers\ClientesController@index');
    Route::get('clientes/novo', 'App\Http\Controllers\ClientesController@novo');
    Route::get('clientes/{cliente}/editar', 'App\Http\Controllers\ClientesController@editar');

    Route::post('clientes/salvar', 'App\Http\Controllers\ClientesController@salvar');
    Route::patch('clientes/{cliente}', 'App\Http\Controllers\ClientesController@atualizar');

    Route::delete('clientes/{cliente}', 'App\Http\Controllers\ClientesController@deletar');


});

