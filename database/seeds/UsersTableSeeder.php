<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'email'    => 'foo@bar.com',
            'name'     => 'sam gavinio',
            'password' => 'password',            
        ]);
    }

}