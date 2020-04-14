<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Adam',
            'lname' => 'Smith',
            'email' => 'asmith@gmail.com',
            'password' => Hash::make('rootroot'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Johnson',
            'email' => 'cjohnson@gmail.com',
            'password' => Hash::make('rootroot'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
