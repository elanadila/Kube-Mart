<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\ProductTransaction;
use App\Store;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use App\Exports\TransactionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::where('store_id', auth()->user()->store_id)->get('id');
        $temporaryProductId = [];
        foreach($products as $product){
          $temporaryProductId[] = $product->id;
        }
        $transactionSell = ProductTransaction::with('product', 'product.store')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->where('user_id', auth()->user()->id)->get();
        return view('cms.transaction.index', compact('transactionSell', 'transactionBuy'));
    }

    public function indexTransaction()
    {
        //
        $transactions = Transaction::all();
        // dd($carts);
        return view('transaction.dashboard-transactions', compact('transactions'));
    }

    public function detail($id)
    {
      $transaction = Transaction::with(['products_transactions', 'products_transactions.product', 'user'])->find($id);

      if($transaction){
        return view('cms.transaction.detail', compact('transaction'));
      }
      abort(404);
    }

    public function report()
    {
        $products = Product::where('store_id', auth()->user()->store_id)->get('id');
        $temporaryProductId = [];
        foreach($products as $product){
          $temporaryProductId[] = $product->id;
        }
        $transactionSell = ProductTransaction::with('product', 'product.store')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->where('user_id', auth()->user()->id)->get();
        return view('cms.transaction.report', compact('transactionSell', 'transactionBuy'));
    }

    public function export_excel()
    {
        return Excel::download(new TransactionExport, 'transaction.xlsx');
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
        return view('cms.admin.transaction.index', compact('transactionSell', 'transactionBuy'));
    }

    public function indexTransactionAdmin()
    {
        //
        $transactions = Transaction::all();
        // dd($carts);
        return view('transaction.dashboard-transactions', compact('transactions'));
    }

    public function detailAdmin($id)
    {
      $transaction = Transaction::with(['products_transactions', 'products_transactions.product', 'user'])->find($id);

      if($transaction){
        return view('cms.admin.transaction.detail', compact('transaction'));
      }
      abort(404);
    }

    public function reportAdmin()
    {
        $products = Product::get('id');
        $temporaryProductId = [];
        foreach($products as $product){
          $temporaryProductId[] = $product->id;
        }
        $transactionSell = ProductTransaction::with('product', 'product.store')->whereIn('product_id', $temporaryProductId)->orderBy('transaction_id', 'desc')->get();
        $transactionBuy = Transaction::with('products_transactions', 'products_transactions.product', 'products_transactions.product.store')->get();
        return view('cms.admin.transaction.report', compact('transactionSell', 'transactionBuy'));
    }

    public function export_excel_admin()
    {
        return Excel::download(new TransactionExport, 'transaction.xlsx');
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
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'status' => 'required',
        'receipt' => 'nullable',
      ]);

      if($request->status == Transaction::STATUS_SHIPPING){
        Transaction::where('id', $id)->update([
          'status' => $request->status,
          'receipt' => $request->resi,
        ]);
      }else{
        Transaction::where('id', $id)->update([
          'status' => $request->status,
        ]);
      }
      return redirect()->route('transaction.index')->with(['success' => 'Status Transaction has been Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function history()
    {
      $transactions = Transaction::with(['user', 'user_approval', 'products_transactions.product'])->has('user')->has('user_approval')->has('products_transactions')->has('products_transactions.product')->get();
      return view('cms.history.transaction.index', compact('transactions'));
    }
}
