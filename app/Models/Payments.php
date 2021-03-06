<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'card_name',
      'card_number',
      'store_name',
      'store_location',
      'phone',
      'price',
      'discount',
      'discount_price',

    ];

    function relationBetweenUser()
    {

    return $this->hasOne('App\Models\User','id','name');
    }

    function relationBetweenCategory()
    {

    return $this->hasOne('App\Models\Category','id','card_name');
    }
    function relationBetweenSubCategory()
    {
    return $this->hasOne('App\Models\SubCategory','id','card_number');
    }


}
