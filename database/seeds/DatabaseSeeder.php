<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventTypesTableSeeder::class);
        $this->call(CompetitorsTableSeeder::class);
        $this->call(EventsTableSeeder::class);

        $this->command->info('EventTypes table has been seeded!');
        $this->command->info('Competitors table has been seeded!');
        $this->command->info('Events table has been seeded!');
    }
}
