<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Store;
use App\Cart;
use App\Transaction;

class User extends Authenticatable
{
    protected $table = "users";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'photo',
        'store_id',
    ];

    CONST ROLE_CUSTOMER = 'Customer';
    CONST ROLE_SELLER = 'Seller';
    CONST ROLE_ADMIN = 'Admin';

    public function store()
    {
      return $this->belongsTo(Store::class, 'store_id');
    }

    public function carts()
    {
      return $this->hasMany(Cart::class, 'user_id');
    }

    public function transactions()
    {
      return $this->hasMany(Transaction::class, 'user_id');
    }

}
