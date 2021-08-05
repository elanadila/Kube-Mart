<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\CategoryStore;

class Store extends Model
{
    protected $table = "stores";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
        'photo',
        'address',
        'phone',
        'description',
        'langitude',
        'longitude',
        'category_store_id'
    ];

    public function users()
    {
      return $this->hasMany(User::class, 'store_id');
    }

    public function category_store()
    {
      return $this->belongsTo(CategoryStore::class, 'category_store_id');
    }

}
