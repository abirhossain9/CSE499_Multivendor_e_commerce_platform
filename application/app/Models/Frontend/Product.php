<?php

namespace App\Models\Frontend;

use App\Models\Backend\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_price',
        'prodcut_quantity',
        'product_description_short',
        'product_description_long',
        'slug',
        'shop_id',
        'category_id',
        'product_image',
        'product_status',
        'product_rating'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

}
