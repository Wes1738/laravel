<?php

use Illuminate\Support\Facades\Route;

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
// Aceita qualquer tipo de requisição
Route::get('/any', function () {
    return 'Any';
});
// Route match -> eu que defino os verbos http
Route::match(['get', 'post'], '/match', function () {
    return 'match';
});
// Rotas com parâmetros no Laravel
Route::get('/categorias/{slug}', function ($slug) {
    return "Produtos da Categoria: {$slug}";
});
//Observe = Nome da Rota/Valor dinâmico/Prefixo
Route::get('/categoria/{slug}/posts', function ($slug) {
    return "Posts da Categoria: {$slug}";
});
// Parâmetros Opcionais (pode ter prefixo também se quiser => '/produtos/{idProduct?}/algumacoisa')
Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s) {$idProduct}";
});