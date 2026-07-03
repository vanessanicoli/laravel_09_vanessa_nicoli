<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        
    public function addProduct(){
        return view('product.addProduct');
    }

    public function submit(Request $request){
        // dd($request->all());

        // $product = new Product();

        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->description = $request->description;

        // $product->save();

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect(route('thankYou'));
    }

    public function showProducts(){
        $products = Product::all();

        return view('product.showProducts', ['products'=>$products]);
    }
}
