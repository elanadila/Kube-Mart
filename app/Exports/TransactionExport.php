<?php

namespace App\Exports;

use App\Transaction;
use App\Product;
use App\ProductTransaction;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransactionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $products = Product::where('store_id', auth()->user()->store_id)->get();
        $productsId = [];
        foreach($products as $product){
          $productsId[$product->id] = $product->id;
        }
        $transactionProduct = ProductTransaction::whereIn('product_id', $productsId)->select('transaction_id')->distinct()->get();
        $transactions = [];
        foreach($transactionProduct as $transactionProduct){
          $transactions[$transactionProduct->transaction_id] = $transactionProduct->transaction_id;
        }
        return Transaction::whereIn('transaction_id', $transactions)->get();
    }
}
