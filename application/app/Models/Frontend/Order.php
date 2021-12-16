<?php

namespace App\Models\Frontend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'ip_address',
        'name',
        'phone',
        'email',
        'shipping_address',
        'massage',
        'is_paid',
        'is_complete',
        'seen_by_admin'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    public function carts(){
        return $this->belongsTo(Cart::class);
    }
}
