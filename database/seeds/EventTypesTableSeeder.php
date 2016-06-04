<?php

use Illuminate\Database\Seeder;
use App\Models\EventType;

class EventTypesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('event_types')->delete();

        EventType::create([
            'name'        => 'Basketball',
            'description' => 'Put that ball in that basket.',
        ]);

        EventType::create([
            'name'        => 'Baseball',
            'description' => 'Hit that ball and go around the bases',
        ]);

        EventType::create([
            'name'        => 'Footbal',
            'description' => 'Kick that ball and put it through the goal',
        ]);
    }

}