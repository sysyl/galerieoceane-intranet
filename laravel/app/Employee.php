<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;

class Employee extends Model
{
    use SoftDeletes;
    use LogsActivity;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'exit_date',
    ];

    /**
     * The attributes that should be logged.
     *
     * @var array
     */
    protected static $logAttributes = [
        'lastname',
        'firstname',
        'role',
        'active',
        'exit_date',
        'email',
        'phonenumber',
    ];

    /**
     * Set the employee's lastname.
     *
     * @param  string  $value
     * @return void
     */
    public function setLastnameAttribute($value)
    {
        $this->attributes['lastname'] = strtoupper($value);
    }

    public function stores()
    {
        return $this->belongsToMany('App\Store')->withTimestamps();
    }
}
