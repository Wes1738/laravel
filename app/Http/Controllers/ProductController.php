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
        // $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $teste = 123;
        $teste2 = 321;
        $teste3 = [1,2,3,4,5];
        $products = ['Tv', 'Geladeira', 'Forno', 'Sofá'];

        // return view('teste', ['teste' => $teste]);
        // ------------- OU -------------------------
        return view('admin.pages.products.index', compact('teste', 'teste2', 'teste3', 'products'));
    }

    public function show($id)
    {
        return "Exibindo o Produto de id: {$id}";
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    public function store(Request $request)
    {
        // dd('Cadastrando...');

        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
        ]);

        dd('OK');

        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->name);
        // dd($request->input('teste', 'default'));
        // dd($request->except('_token', 'name'));

        if ($request->file('photo')->isValid()) {
            // dd($request->file('photo')->store('products'));
            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));
        }
    }

    public function update($id)
    {
        dd("Editando o produto {$id}");
    }

    public function destroy($id)
    {
        return "Deletando o produto: {$id}";
    }
}
