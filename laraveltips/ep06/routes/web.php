<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/{id}', 'UserController@show');
Route::get('/endereco/{address}', 'AddressController@show');
Route::get('/artigo/{post}', 'PostController@show');
