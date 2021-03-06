<?php

namespace App\Models\Frontend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_name',
        'slug',
        'shop_owner',
        'shop_address',
        'shop_phone',
        'shop_description',
        'shop_type',
        'shop_image',
        'shop_status',
        'sale_status'
    ];
    public function shop()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id');
    }
}
