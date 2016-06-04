<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Competitor;
use App\Models\EventCompetitor;

class EventsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('event_competitors')->delete();        
        DB::table('events')->delete();

        $date = DateTime::createFromFormat('Y-m-d H:i:s', '2016-02-15 15:16:17');
        Event::create([
            'id'            => 1,
            'name'          => 'Championship Game',
            'event_time'    => $date,
            'event_type_id' => EventType::EVENT_TYPE_BASKETBALL,
        ]);

        Event::create([
            'id'              => 2,
            'name'            => 'Semi-finals Game',
            'event_time'      => $date,
            'event_type_id'   => EventType::EVENT_TYPE_BASEBALL,
            'completion_time' => DateTime::createFromFormat('Y-m-d H:i:s', '2016-06-04 14:00:00'),
        ]);

        Event::create([
            'id'              => 3,
            'name'            => 'Semi-finals Game',
            'event_time'      => $date,
            'event_type_id'   => EventType::EVENT_TYPE_BASKETBALL,
            'completion_time' => DateTime::createFromFormat('Y-m-d H:i:s', '2016-06-04 14:00:00'),
        ]);

        $ph = Competitor::where(['name'=> 'Philippines'])->first();
        $us = Competitor::where(['name'=> 'USA'])->first();
        $spain = Competitor::where(['name'=> 'Spain'])->first();
        $china = Competitor::where(['name'=> 'China'])->first();
        $brazil = Competitor::where(['name'=> 'Brazil'])->first();
        $russia = Competitor::where(['name'=> 'Russia'])->first();
        
        EventCompetitor::create([
            'score'            => '88',
            'is_winning_team'  => false,
            'competitor_id'    => $ph->id,
            'event_id'         => 1,
        ]);

        EventCompetitor::create([
            'score'            => '22',
            'is_winning_team'  => false,
            'competitor_id'    => $us->id,
            'event_id'         => 1,
        ]);

        EventCompetitor::create([
            'score'            => '5',
            'is_winning_team'  => true,
            'competitor_id'    => $spain->id,
            'event_id'         => 2,
        ]);

        EventCompetitor::create([
            'score'            => '2',
            'is_winning_team'  => false,
            'competitor_id'    => $china->id,
            'event_id'         => 2,
        ]);

        EventCompetitor::create([
            'score'            => '105',
            'is_winning_team'  => true,
            'competitor_id'    => $brazil->id,
            'event_id'         => 3,
        ]);

        EventCompetitor::create([
            'score'            => '77',
            'is_winning_team'  => false,
            'competitor_id'    => $russia->id,
            'event_id'         => 3,
        ]);

        
    }

}