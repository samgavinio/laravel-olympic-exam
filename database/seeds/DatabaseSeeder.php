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

        $this->command->info('EventTypes table has been seeded!');
    }
}
