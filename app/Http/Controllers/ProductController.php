<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request, $user;

    public function __construct(Request $request, Product $product)
    {
        $this->request = $request;
        $this->repository = $product;

        // $this->middleware('auth');
        // Estou bloqueando o acesso a essas rotas abaixo
        // $this->middleware('auth')->only(['create', 'store']);
        // Aplica o middleware em todos EXCETO no index
        // $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $products = Product::latest()->paginate();

        // return view('teste', ['teste' => $teste]);
        // ------------- OU -------------------------
        return view('admin.pages.products.index', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        // $product = Product::where('id', $id)->first();
        if (!$product = $this->repository->find($id)) 
            return redirect()->back();

        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreUpdateProductRequest $request)
    { 
        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
        ]);
        */

        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->name);
        // dd($request->input('teste', 'default'));
        // dd($request->except('_token', 'name'));

        /*if ($request->file('photo')->isValid()) {
            // dd($request->file('photo')->store('products'));
            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));
        }*/

        $data = $request->only('name', 'description', 'price');

        $this->repository->create($data);

        return redirect()->route('products.index');
    }

    public function update($id)
    {
        dd("Editando o produto {$id}");
    }

    public function destroy($id)
    {
        $product = $this->repository->where('id', $id)->first();
        if (!$product)
            return redirect()->back();

        $product->delete();

        return redirect()->route('products.index');
    }
}
