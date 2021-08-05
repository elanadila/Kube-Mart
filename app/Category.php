<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
        'photo',
    ];

    public function products()
    {
      return $this->hasMany(Product::class, 'category_store_id');
    }

}
