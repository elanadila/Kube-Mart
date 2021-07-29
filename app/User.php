<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

}
