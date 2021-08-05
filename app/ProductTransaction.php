<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;
use App\Product;

class ProductTransaction extends Model
{
    protected $table = "product_transactions";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'price',
        'quantity',
        'review',
        'product_id',
        'transaction_id',
    ];


    public function transaction()
    {
      return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function product()
    {
      return $this->belongsTo(Product::class, 'product_id');
    }

}
