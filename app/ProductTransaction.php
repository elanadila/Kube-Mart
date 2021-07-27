<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    ];

}
