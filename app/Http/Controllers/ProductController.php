<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        // dd($products);
        return view('product.index', compact('products'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
    }

    public function indexAdmin()
    {
        //
        $products = Product::all();
        return view('product.dashboard-products', compact('products'));
        // return view('product.dashboard-products', compact('product'));
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

    public function createAdmin()
    {
        //
        $products = Product::all();
        return view('product.dashboard-products-create', compact('products'));
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
        // $product = new Product;
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->stock = $request->stock;
        // $product->description = $request->description;
        // $product->save();

        $this->validate($request, [
            'name' => 'required|max:181',
            'price' => 'required|max:181',
            'stock' => 'required|max:181',
            'description' => 'required',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
    
        ]);

        // Product::create($request->all());
            

        return redirect('/product/dashboard-products')->with(['success' => 'Product added successfully']);;

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        // $products = DB::table('products')->find($id);

        // $products =  DB::table('products')->where('id',$id)->first();
        
    
        // return $stores->name;
        return view('product.product-details', compact('product'));
    }

    public function showAdmin(Product $product)
    {
        //
        // $products = DB::table('products')->find($id);

        // $products =  DB::table('products')->where('id',$id)->first();
        
    
        // return $stores->name;
        return view('product.dashboard-products-details', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('product.dashboard-products-details', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function categories(){
        $products = Product::all();
        // dd($products);
        return view('product.categories', ['products' => $products]);
    }
}
