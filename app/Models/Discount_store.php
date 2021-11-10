<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount_store extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_name', 'store_location', 'phone', 'price',
    ];
}
