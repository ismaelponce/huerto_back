<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function getProducts(){
        return response()->json(Product::all(), 200);
    }

    public function getProduct($id){
        $product = Product::findOrFail($id);
        if (is_null($product)) { return response()->json(['message' => 'Product not found'], 404); }
        return response()->json($product, 200);
    }

    public function addProduct(Request $request){
        
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'stock' => 'required'
        ]);
        
        return Product::create($request->all());
    }

    public function updateProduct(Request $request, $id){
        $product = Product::findOrFail($id);
        if (is_null($product)) { return response()->json(['message' => 'Product not found'], 404); }
        
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        if (is_null($product)) { return response()->json(['message' => 'Product not found'], 404); }
        
        $product->delete();
        return response()->json(['message' => 'Product deleted'], 204);
    }

    public function searchProduct($name){
        return Product::where('name', 'like',  '%'.$name.'%')->get();
    }

}
