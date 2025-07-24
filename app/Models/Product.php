<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount_price',
        'image',
        'category',
        'brand',
        'stock',
        'is_active',
        'slug',
    ];

    // Additional methods and relationships can be defined here
}
