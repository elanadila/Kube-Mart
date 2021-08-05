<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Store;
class CategoryStore extends Model
{
    protected $table = "categories_store";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
    ];

    public function stores()
    {
      return $this->hasMany(Store::class, 'category_store_id');
    }

}
