<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    const EVENT_TYPE_BASKETBALL = 1;

    const EVENT_TYPE_BASEBALL = 2;
    
    const EVENT_TYPE_FOOTBALL = 3;
    
    protected $table = 'event_types';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];    
}
