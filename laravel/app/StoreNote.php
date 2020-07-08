<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;

class StoreNote extends Model
{
    use SoftDeletes;
    use LogsActivity;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'published_at',
    ];

    /**
     * The attributes that should be logged.
     *
     * @var array
     */
    protected static $logAttributes = [
        'name',
        'content',
        'priority',
        'status',
        'published_at',
        'store_id',
    ];

    public function store()
    {
        return $this->belongsTo('App\Store', 'store_id');
    }
}
