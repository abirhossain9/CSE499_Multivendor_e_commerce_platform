<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_price',
        'product_description_short',
        'product_description_long',
        'slug',
        'shop_id',
        'product_category',
        'product_image',
        'product_status',
        'product_rating'
    ];
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

}
