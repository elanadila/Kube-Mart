<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Product;
use View;

class ProductController extends Controller
{

    public function indexPublic()
    {
        return Product::get();
    }

    public function detailPublic($id)
    {
        $product =  Product::where('id', $id)->first();
        $product->update([
            'name' => $product->name . ' edit'
        ]);

        return $product;
    }
    // public function home() {
    //     return view('index');
    // }

    public function index(){
         $products = DB::table('products')->get();
        // dd($products);
        return view('product.index', ['products' => $products]);
        // return \View::make('asddsa');
        // return view('asddsa', $products);

    }

    public function categories(){
        $products = DB::table('products')->get();
        // dd($products);
        return view('product.categories', ['products' => $products]);
    }


   

        
}