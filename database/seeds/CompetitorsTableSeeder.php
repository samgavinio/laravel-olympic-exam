<?php

use Illuminate\Database\Seeder;
use App\Models\Competitor;

class CompetitorsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('competitors')->delete();        

        Competitor::create(['name'=> 'Philippines']);
        Competitor::create(['name'=> 'Spain']);
        Competitor::create(['name'=> 'USA']);
        Competitor::create(['name'=> 'China']);
        Competitor::create(['name'=> 'Brazil']);
        Competitor::create(['name'=> 'Russia']);
    }

}