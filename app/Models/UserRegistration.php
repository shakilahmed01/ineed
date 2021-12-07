<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRegistration extends Model
{
  use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'card_name',
        'card_number',
        'card_ammount',
        'account',
        'address',
        'photo',

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
    return $this->hasOne('App\Models\Subcategory','id','card_number');
    }
}
