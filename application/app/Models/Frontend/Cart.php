<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Frontend\Shop;
use App\Models\Frontend\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

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
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public static function totalCarts(){
        if(Auth::check()){
            $carts = Cart::where('user_id',Auth::id())->where('order_id',NULL)->get();
        }
        else{
            $carts = Cart::where('ip_address',request()->ip())->where('order_id',NULL)->get();
        }
        return $carts;
    }
    public static function totalItems(){
        if(Auth::check()){
            $carts = Cart::where('user_id',Auth::id())->where('order_id',NULL)->get();
        }
        else{
            $carts = Cart::where('ip_address',request()->ip())->where('order_id',NULL)->get();
        }
        $total_item = 0;
        foreach ($carts as $cart) {
            # code...
            $total_item = $total_item + $cart->product_quantity;
        }
        return $total_item;
    }
}
