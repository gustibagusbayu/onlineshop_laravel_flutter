<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['messages' => 'Success', 'data' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json(['messages' => 'Success', 'data' => $product]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json(['messages' => 'Data has been inserted successfully', 'data' => $product]);
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['messages' => 'Success', 'data' => $product]);
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['messages' => 'Success', 'data' => null ]);
    }
}
