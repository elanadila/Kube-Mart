<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ProductTransaction;

class Transaction extends Model
{
    protected $table = "transactions";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'address',
        'province',
        'city',
        'postal_code',
        'country',
        'receipt',
        'courier',
        'phone',
        'payment_prove',
        'user_id',
        'approval_user_id',
        'status',
    ];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function user_approval()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function products_transactions()
    {
      return $this->hasMany(ProductTransaction::class, 'transaction_id');
    }

}
