<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
    ];

}
