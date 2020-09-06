<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProImage extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'productName', 
    ];
}
