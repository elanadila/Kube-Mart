<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'phone',
        'payment_prove',
        'user_id',
        'approval_user_id',
        'status',
    ];

}
