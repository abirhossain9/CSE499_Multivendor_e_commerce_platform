<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Frontend\Shop;
use App\Models\Frontend\Product;

class Cart extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'product_id',
        'ip_address',
        'product_quantity',
        'order_id'
    ];
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
