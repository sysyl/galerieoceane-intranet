<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;

class Store extends Model
{
    use SoftDeletes;
    use LogsActivity;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'termination_date',
    ];

    /**
     * The attributes that should be logged.
     *
     * @var array
     */
    protected static $logAttributes = [
        'name',
        'description',
        'unit_size',
        'active',
        'termination_date',
        'phonenumber_1',
        'phonenumber_2',
        'emergency_phonenumber_1',
        'emergency_phonenumber_2',
        'shopping_mall_id',
        'retail_space_id',
        'product_id',
    ];

    /**
     * Set the name of the store.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }

    public function shoppingMall()
    {
        return $this->belongsTo('App\ShoppingMall', 'shopping_mall_id');
    }

    public function retailSpace()
    {
        return $this->belongsTo('App\RetailSpace', 'retail_space_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function storeNotes()
    {
        return $this->hasMany('App\StoreNote');
    }

    public function employees()
    {
        return $this->belongsToMany('App\Employee')->withTimestamps();
    }

    public function storeRevenues()
    {
        return $this->hasMany('App\StoreRevenue');
    }
}
