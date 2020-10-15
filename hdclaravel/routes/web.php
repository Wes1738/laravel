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
// Com query string
Route::get('/produtos', function () {
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});
Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});
// Opcional
Route::get('/produtosop/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
