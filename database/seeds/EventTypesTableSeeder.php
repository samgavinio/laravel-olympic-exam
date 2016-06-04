<?php

use Illuminate\Database\Seeder;
use App\Models\EventType;

class EventTypesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('event_competitors')->delete();        
        DB::table('events')->delete();
        DB::table('event_types')->delete();

        EventType::create([
            'id'          => EventType::EVENT_TYPE_BASKETBALL,
            'name'        => 'Basketball',
            'description' => 'Put that ball in that basket.',
        ]);

        EventType::create([
            'id'          => EventType::EVENT_TYPE_BASEBALL,
            'name'        => 'Baseball',
            'description' => 'Hit that ball and go around the bases',
        ]);

        EventType::create([
            'id'          => EventType::EVENT_TYPE_FOOTBALL,
            'name'        => 'Football',
            'description' => 'Kick that ball and put it through the goal',
        ]);
    }

}