<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use App\CategoryStore;
use App\User;
use View;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stores = Store::all();
        // dd($products);
        // return view('store.toko', compact('stores'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
        return view('public.store.index', compact('stores'));
    }

    public function indexAccount()
    {
        //
        $stores = Store::all();
        // dd($products);
        return view('store.dashboard-account', compact('stores'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
    }
  

    public function updateStore()
    {
        //
        $stores = Store::all();
        // dd($products);
        return view('public.map.index', compact('stores'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
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
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
        // return $store;
        return view('public.store.detail', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
