<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $fillable = [

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function carts(){
        return $this->belongsTo(Cart::class);
    }
}
