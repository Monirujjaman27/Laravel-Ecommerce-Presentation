<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'productName', 'productSlug', 'categorySlug', 'categorySlug', 'brandId', 'categoryId', 'description', 'price', 'discount', 'status', 'availability', 'thumbnail', 'status', 'adminId', 
    ];


    
}
