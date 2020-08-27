<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request, $user;

    public function __construct(Request $request)
    {
        // dd($request->prm1);
        $this->request = $request;

        // $this->middleware('auth');
        // Estou bloqueando o acesso a essas rotas abaixo
        // $this->middleware('auth')->only(['create', 'store']);
        // Aplica o middleware em todos EXCETO no index
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $teste = '08081508';

        // return view('teste', ['teste' => $teste]);
        // ------------- OU -------------------------
        return view('teste', compact('teste'));
    }

    public function show($id)
    {
        return "Exibindo o Produto de id: {$id}";
    }

    public function create()
    {
        return 'Exibindo o form de cadastro de um novo produto';
    }

    public function edit($id)
    {
        return "Form para editar o produto: {$id}";
    }

    public function store()
    {
        return 'Cadastrando um novo produto';
    }

    public function update($id)
    {
        return "Editando o produto: {$id}";
    }

    public function destroy($id)
    {
        return "Deletando o produto: {$id}";
    }
}
