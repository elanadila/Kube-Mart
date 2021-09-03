<?php

namespace App\Http\Controllers;

use App\CategoryStore;
use App\Product;
use Illuminate\Http\Request;

class CategoryStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorystores = CategoryStore::all();
        $products = Product::all();
        // $categorystores = CategoryStore::with('product')->get();
        return view('public.category.detail', compact('products'));
    }

    public function detail($id)
    {
        //
        $products = Product::where('category_id', $id)->get();
        // $categorystores = CategoryStore::with('product')->get();
        return view('public.category.detail', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryStore  $categoryStore
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryStore $categoryStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryStore  $categoryStore
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryStore $categoryStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryStore  $categoryStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryStore $categoryStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryStore  $categoryStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryStore $categoryStore)
    {
        //
    }
}
