<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()){
         $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
         $totalPrice = 0;
         foreach($carts as $cart){
           $totalPrice += $cart->quantity * $cart->product->price;
          //  $totalPrice += $cart->quantity * 1;
         }
        return view('cms.cart.index', compact('carts', 'totalPrice'));
      }else{
        return redirect()->route('auth.login');
      }

    }

    public function checkout()
    {
        //

        $carts = Cart::all();
        // dd($carts);
        return view('cms.cart.checkout', compact('carts'));
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
      $this->validate($request, [
          'product_id' => 'required',
      ]);

      if(Auth::user()){
          $cart = Cart::where('product_id', $request->product_id)
          ->where('user_id', auth()->user()->id)->first();
          if($cart){
              $cart->update([
                  'quantity' => $cart->quantity+1,
              ]);
          }else{
              Cart::create([
                  'quantity' => 1,
                  'user_id' => auth()->user()->id,
                  'product_id' => $request->product_id,
              ]);
          }
          return redirect()->route('cart.index');
      }else{
        return redirect()->route('auth.login');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
      $this->validate($request, [
        'product_id' => 'required',
      ]);

    if(Auth::user()){
      $cart = Cart::where('product_id', $request->product_id)
      ->where('user_id', auth()->user()->id)->first();
      if($cart){
        $cart->delete();
        return redirect()->route('cart.index');
      }
    }else{
      return redirect()->route('auth.login');
    }
  }
}
