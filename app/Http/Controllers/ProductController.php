<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['camiseta Nike', 'Tênis Adidas', 'Meia Lupo'];

        return $products;
    }

    public function show($id)
    {
        return "Exibindo o Produto de id: {$id}";
    }
}
