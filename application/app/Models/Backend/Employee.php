<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'designation',
        'slug',
        'overview',
        'phone',
        'address',
        'email',
        'profile_pic',
        'status'
    ];
}
