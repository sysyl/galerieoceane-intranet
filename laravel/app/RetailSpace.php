<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RetailSpace extends Model
{
    use SoftDeletes;

    public function shoppingMall()
    {
        return $this->belongsTo('App\ShoppingMall', 'shopping_mall_id');
    }

    public function store()
    {
        return $this->hasOne('App\Store');
    }
}
