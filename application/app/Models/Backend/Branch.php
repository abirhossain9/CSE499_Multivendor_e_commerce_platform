<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'bangla_name',
        'slug',
        'address_line1',
        'address_line2',
        'email',
        'phone',
        'status'
    ];
}
