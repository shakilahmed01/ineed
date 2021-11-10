<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery_store extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_name',
        'store_location',
        'card_name',
        'card_quantity',
        'card_ammount',
        'account',
    ];
}
