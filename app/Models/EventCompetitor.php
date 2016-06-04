<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCompetitor extends Model
{
    protected $table = 'event_competitors';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score', 'is_winning_team'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];    
}