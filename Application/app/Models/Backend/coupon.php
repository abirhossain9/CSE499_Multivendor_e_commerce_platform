<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'discount_type',
        'fixed_value',
        'percent_value',
        'status'
    ];
}
