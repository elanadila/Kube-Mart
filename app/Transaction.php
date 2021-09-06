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
        'invoice',
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

    CONST STATUS_WAITING = 'Waitingprovepayment';
    CONST STATUS_REJECTED = 'Rejected';
    CONST STATUS_CONFIRM = 'Confirm';
    CONST STATUS_SHIPPING = 'shipping';
    CONST STATUS_COMPLETE = 'complete';

    CONST STATUS_LISTS = [
      'Waitingprovepayment' => 'Waiting Prove Payment',
      'Rejected' => 'Rejected',
      'Confirm' => 'Confirm',
      'shipping' => 'Shipping',
      'complete' => 'Complete',
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

    public static function handleStatus($status){
      switch($status){
        case self::STATUS_WAITING :
          return '<a class="btn btn-sm btn-secondary">Waiting</a>';
          break;
        case self::STATUS_REJECTED :
          return '<a class="btn btn-sm btn-danger">Rejected</a>';
          break;
        case self::STATUS_CONFIRM :
          return '<a class="btn btn-sm btn-primary">CONFIRM</a>';
          break;
        case self::STATUS_SHIPPING :
          return '<a class="btn btn-sm btn-info">SHIPPING</a>';
          break;
        case self::STATUS_COMPLETE :
          return '<a class="btn btn-sm btn-success">COMPLETE</a>';
          break;
        default:
          return '<a class="btn btn-sm btn-secondary">Waiting</a>';
          break;
      }
    }

}