<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contato', function () {
    return view('contact');
});

// Como chamar Uma rota de um arquivo que está dentro de uma pasta/diretório
Route::get('/sobre', function () {
    return view('site.about');
});