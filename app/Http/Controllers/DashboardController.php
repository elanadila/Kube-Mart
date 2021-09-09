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
        $transactionSell = ProductTransaction::with('transaction', 'product', 'product.store')->has('transaction')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->has('products_transactions')->where('user_id', auth()->user()->id)->get();
        $totalCustomer = [];
        foreach($transactionBuy as $transaction){
          $totalCustomer[$transaction->user_id] = $transaction->user_id; //otomatis terdistinct / non duplicate user_id
        }
        $totalRevenue = 0;
        $totalTransaction = [];
        foreach($transactionSell as $transaction){
          $totalRevenue += $transaction->price * $transaction->quantity;
          if($transaction->transaction){ //has transaction data
            $totalTransaction[$transaction->transaction->id] = $transaction->transaction->id;
          }
        }

        $listsTransactions = [];
        foreach($transactionBuy as $buy){
          $total = 0;
          foreach($buy->products_transactions as $productTransaction){
            $total += $productTransaction->quantity * $productTransaction->price;
          }
          $listsTransactions[] = [
            'transaction_id' => $buy->id,
            'type' => 'BUY',
            'status' => Transaction::handleStatus($buy->status),
            'total' => $total,
            'date' => $buy->created_at->diffForHumans(),
          ];
        }
        $tempListsTransactions = [];
        foreach($transactionSell as $sell){
          $total = 0;
          foreach($transactionSell as $childSell){
            if($childSell->transaction_id == $sell->transaction_id){
              $total += $childSell->quantity * $childSell->price;
            }
          }
          $tempListsTransactions[$sell->transaction_id] = [
            'transaction_id' => $sell->transaction_id,
            'type' => 'SELL',
            'status' => Transaction::handleStatus($sell->transaction->status),
            'total' => $total,
            'date' => $sell->created_at->diffForHumans(),
          ];
        }

        foreach($tempListsTransactions as $transaction){
          $listsTransactions[] = $transaction;
        }
        return view('cms.dashboard.index', compact('transactionSell', 'transactionBuy', 'totalCustomer', 'totalRevenue', 'totalTransaction', 'listsTransactions'));
    }

    public function indexAdmin()
    {
        $products = Product::get('id');
        $temporaryProductId = [];
        foreach($products as $product){
          $temporaryProductId[] = $product->id;
        }
        $transactionSell = ProductTransaction::with('product', 'product.store')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->get();
        $totalCustomer = [];
        foreach($transactionBuy as $transaction){
          $totalCustomer[$transaction->user_id] = $transaction->user_id; //otomatis terdistinct / non duplicate user_id
        }
        $totalRevenue = 0;
        $totalTransaction = [];
        foreach($transactionSell as $transaction){
          $totalRevenue += $transaction->price * $transaction->quantity;
          if($transaction->transaction){ //has transaction data
            $totalTransaction[$transaction->transaction->id] = $transaction->transaction->id;
          }
        }
        return view('cms.admin.dashboard.index', compact('transactionSell', 'transactionBuy', 'totalCustomer', 'totalRevenue', 'totalTransaction'));

        // return 'sukses login';

    }
}
