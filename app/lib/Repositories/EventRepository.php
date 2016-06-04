<?php

namespace App\lib\Repositories;

use \DateTime;
use App\Models\Event;


class EventRepository
{
    /**
     * Get upcoming events
     *
     * @param DateTime $dateTime
     * @return Collection
     */
    public function getUpcomingEvents(DateTime $dateTime)
    {
        return Event::where('event_time', '>', $dateTime)
                   ->get();
    }

    public function getEventsByEventTime(DateTime $dateFrom = null, DateTime $dateTo = null, $perPage = 15, $isCompleted = null)
    {
        $qb = Event::where('id', '!=', NULL);
        
        if($dateFrom !== null){
            $qb->where('event_time', '>=', $dateFrom);
        }

        if($dateTo !== null){
            $qb->where('event_time', '<', $dateTo);
        }

        if($isCompleted === true){            
            $qb->where('completion_time', '!=', NULL);
        }
        else if($isCompleted === false){            
            $qb->where('completion_time', '=', NULL);
        }


        return $qb->paginate($perPage);
    }
}