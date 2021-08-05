<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Store;
use App\Category;
use App\Cart;
use App\ProductTransaction;

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
        'weight',
        'store_id',
        'user_id',
        'category_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function store()
    {
      return $this->belongsTo(Store::class, 'store_id');
    }

    public function category()
    {
      return $this->belongsTo(Category::class, 'category_id');
    }

    public function carts()
    {
      return $this->hasMany(Cart::class, 'product_id');
    }

    public function products_transactions()
    {
      return $this->hasMany(ProductTransaction::class, 'product_id');
    }

}
