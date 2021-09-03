<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        //
        $categorystores = CategoryStore::all();
        $products = Product::all();
        // $categorystores = CategoryStore::with('product')->get();
        return view('public.category.index', compact('products'));
    }
}

