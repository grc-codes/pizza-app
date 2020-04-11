<?php

use Illuminate\Database\Seeder;

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
            'password' => Hash::make('rootroot')
        ]);

        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Johnson',
            'email' => 'cjohnson@gmail.com',
            'password' => Hash::make('rootroot')
        ]);
    }
}
