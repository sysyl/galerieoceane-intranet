<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingMall extends Model
{
    public function retailSpaces()
    {
        return $this->hasMany('App\RetailSpace');
    }

    public function stores()
    {
        return $this->hasMany('App\Store');
    }
}
