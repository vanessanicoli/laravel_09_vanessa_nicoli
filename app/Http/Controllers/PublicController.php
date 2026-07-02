<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function addProduct(){
        return view('addProduct');
    }

    public function thankYou(){
        return view('thankYou');
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

        return view('showProducts', ['products'=>$products]);
    }
}
