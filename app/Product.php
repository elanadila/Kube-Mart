<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
        'price',
        'stock',
        'description',
        'photo',
        'store_id',
        'category_id',
    ];

}
