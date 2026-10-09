<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
         $products = product::all();

    return view('index', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        product::create($data);

        return redirect('/');
    }
    public function edit($id)
{
    $product = product::find($id);

    return view('edit', compact('product'));
}
    public function update(Request $request, $id)
{
    $product = product::find($id);

    $product->product_name = $request->product_name;
    $product->category = $request->category;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->description = $request->description;

    $product->save();

    return redirect('/');
}
public function delete($id)
{
    $delete = product::find($id);
    $delete->delete();

    return redirect('/');
}
public function search(Request $request)
{
    $search = $request->search;

    $products = product::where('product_name', 'like', '%' . $search . '%')->get();

    return view('index', compact('products'));
}
public function filter(Request $request)
{
    $category = $request->category;

    $products = product::where('category', $category)->get();

    return view('index', compact('products'));
}
}