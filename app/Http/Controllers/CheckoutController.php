<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Transaction;
use App\ProductTransaction;
use Auth;

class CheckoutController extends Controller
{
    //
    public function step1(){
        
        if(Auth::user()){
            $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
           return view('cms.checkout.step-1', compact('carts'));
         }else{
           return redirect()->route('auth.login');
         }

    }

    public function step1Submit(Request $request){
      $this->validate($request, [
        'address' => 'required',
        'province' => 'required',
        'city' => 'required',
        'postal_code' => 'required',
        'country' => 'required',
        'phone' => 'required',
        'courier' => 'required',
    ]);

      $transaction =  Transaction::create([
          'address' => $request->address,
          'province' => $request->province,
          'city' => $request->city,
          'postal_code' => $request->postal_code,
          'country' => $request->country,
          'phone' => $request->phone,
          'receipt' => '-',
          'courier' => $request->courier,
          'invoice' => strtotime(now()),
          'user_id' => auth()->user()->id,
      ]);

      $carts = Cart::with(['product'])->where('user_id', auth()->user()->id)->get();
      $products = [];
      $transaction['total_price'] = 0;
      foreach($carts as $cart){
        if(!is_null($cart->product)){
          ProductTransaction::create([
            'product_id' => $cart->product_id,
            'transaction_id' => $transaction->id,
            'quantity' => $cart->quantity,
            'price' => $cart->product->price,
        ]);
        $products[]=[
          'name' => $cart->product->name,
          'quantity' => $cart->quantity,
          'price' => $cart->product->price,
          'total' => $cart->product->price * $cart->quantity,
        ];
        $transaction['total_price'] += $cart->product->price * $cart->quantity;
        Cart::where('id', $cart->id)->delete();
        }        
      }

      return view('cms.checkout.step-1', compact('transaction', 'products'));
    
      // return redirect()->route('checkout.step-1')->with(['success' => 'Successful Checkout']);
    }

    public function step2(){
        if(Auth::user()){
            $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
           return view('cms.checkout.step-2', compact('carts'));
         }else{
           return redirect()->route('auth.login');
         }

    }

    public function step2Submit(){

    }

    public function step3(){
        if(Auth::user()){
            $carts = Cart::with(['product.store'])->where('user_id', auth()->user()->id)->get();
           return view('cms.checkout.step-3', compact('carts'));
         }else{
           return redirect()->route('auth.login');
         }

    }

    public function step3Submit(){

    }
}
