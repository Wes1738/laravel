<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PostController@showForm');
Route::post('/debug', 'PostController@debug')->name('debug');
