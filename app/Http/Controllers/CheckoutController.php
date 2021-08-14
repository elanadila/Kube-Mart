<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
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

    public function step1Submit(){

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
