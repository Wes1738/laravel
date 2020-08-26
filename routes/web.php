<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contact');
});

// Chamando o Controller ProductController com o método/ação index
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');

// Login
Route::get('/login', function () {
    return "Página de Login";
})->name('login');

/*
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
// Redirect
// Route::get('redirect1', function () {
//     return redirect('/redirect2');
// });
//-----------OU Simplesmente------------
Route::redirect('/redirect1', 'redirect2');
Route::get('redirect2', function () {
    return "Redirect 02";
});

// Views (Exemplo clássico já visto anteriormente)
Route::view('/view', 'welcome');

// Rotas Nomeadas
Route::get('name-url', function () {
    return "Hey Hey Hey";
})->name('url.name');

Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

// Grupo de Rotas
// middleware -> Autenticação
/*Route::middleware(['auth'])->group( function () {

    // Prefix -> Padroniza um prefixo na rota
    Route::prefix('admin')->group( function () {

        // Namespace
        Route::namespace('Admin')->group( function () {

            // Name -> Padronizar o name das rotas
            Route::name('admin.')->group(function () {
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');;
                
                Route::get('/produtos', 'TesteController@produto')->name('products');;

                Route::get('/', function () {
                    return redirect()->route('admin.dashboard');
                })->name('home');;
            });

        });
        
    });

});
// --------------------------------------OU----------------------------------------------
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    // Esse não funciona ----->>> 'name' => 'admin.'
], function () {
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');;
    
    Route::get('/produtos', 'TesteController@produto')->name('products');;

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');;
});
*/

