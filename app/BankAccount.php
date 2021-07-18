<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $table = "bank_accounts";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'bank_name',
        'owner',
        'rekening_number',
        'store_id',
        'created_at',
        'updated_at',
    ];

}
