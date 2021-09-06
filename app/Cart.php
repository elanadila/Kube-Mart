<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Cart extends Model
{
    protected $table = "carts";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'quantity',
        'user_id',
        'product_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
      return $this->belongsTo(Product::class, 'product_id');
    }

    public static function getTotalCart($userId){
      return count(self::where('user_id', $userId)->select('id')->get());
    }

}
