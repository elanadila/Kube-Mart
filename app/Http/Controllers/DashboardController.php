<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\ProductTransaction;
use App\Store;
use App\User;
use App\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::where('store_id', auth()->user()->store_id)->get('id');
        $temporaryProductId = [];
        foreach($products as $product){
          $temporaryProductId[] = $product->id;
        }
        $transactionSell = ProductTransaction::with('product', 'product.store')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->where('user_id', auth()->user()->id)->get();


        return view('cms.dashboard.index', compact('transactionSell', 'transactionBuy'));

        // return 'sukses login';
        
    }

    public function indexAdmin()
    {
        $products = Product::get('id');
        $temporaryProductId = [];
        foreach($products as $product){
          $temporaryProductId[] = $product->id;
        }
        $transactionSell = ProductTransaction::with('product', 'product.store')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->where('user_id')->get();


        return view('cms.admin.dashboard.index', compact('transactionSell', 'transactionBuy'));

        // return 'sukses login';
        
    }
}
