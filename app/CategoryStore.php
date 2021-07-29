<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryStore extends Model
{
    protected $table = "categories_store";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name',
    ];

}
