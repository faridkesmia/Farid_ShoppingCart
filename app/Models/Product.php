<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','image','description','price','categories_id'];

    function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
