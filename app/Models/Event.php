<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'event_time', 'completion_time'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function eventCompetitors()
    {
        return $this->hasMany('App\Models\EventCompetitor', 'event_id', 'id');
    }
    
    public function toArray()
    {
        $eventCompetitors = $this->eventCompetitors()->get();
        $competitorArray = array();
        foreach($eventCompetitors as $eventCompetitor){
            $competitorArray[] = $eventCompetitor->toArray();
        }

        return array(
            'id'              => $this->id,
            'name'            => $this->name,
            'event_time'      => $this->event_time,
            'completion_time' => $this->completion_time,
            'is_completed'    => $this->completion_time !== null,
            'competirors'     => $competitorArray,
        );
    }
}
