<?php

namespace App\Models;

use App\Models\ProductImage;
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

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function defaultImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_default', true);
    }
}
