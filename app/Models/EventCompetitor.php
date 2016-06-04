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

    public function competitor()
    {
        return $this->hasOne('App\Models\Competitor', 'id', 'competitor_id');
    }

    public function toArray()
    {
        $competitor = $this->competitor()->first();
        
        return array(
            'id'              => $this->id,
            'score'           => $this->score,
            'is_winning_team' => $this->is_winning_team,
            'competitor'      => $competitor,
        );
    }
}