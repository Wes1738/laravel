<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session()
    {
        echo "<h1>Teste Sessão</h1>";

        session(['name' => 'Wesley']);
        echo session('name') . "<br>";

        session()->put('lastname', 'Rodrigues');
        echo session()->get('lastname') . "<br>";

        Session::put('email', null);
        echo Session::get('email') . "<br>";

        Session::put(['cart_product' => '1', 'cart_quatity' => 2, 'price' => 138]);

        Session::forget(['price', 'cart_product']);

        if(Session::has('email')){
            echo "<p>O e-mail informado é válido!</p>";
        } else {
            echo "<p>O e-mail informado NÃO é válido!</p>";
        }

        // Exists
        if(Session::exists('email')){
            echo "<p>O e-mail informado é válido!</p>";
        } else {
            echo "<p>O e-mail informado NÃO é válido!</p>";
        }

        // Session::flash('message', 'O artigo foi criado com sucesso!');
        echo Session::get('message') . "<br>";

        var_dump(Session::all(), session()->all());
    }
}
