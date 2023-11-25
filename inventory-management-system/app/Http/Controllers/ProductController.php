<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name'     => 'required|max:255',
            'quantity' => 'required|integer|min:0',
            'price'    => 'required|numeric',
        ]);

        Product::create($validatedData);
        return redirect()->route('products.index');
    }
    public function show(string $id) {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function edit(string $id) {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, string $id) {
        $validatedData = $request->validate([
            'name'     => 'required|max:255',
            'quantity' => 'required|integer|min:0',
            'price'    => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);
        return redirect()->route('products.index');
    }
    public function destroy(string $id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
