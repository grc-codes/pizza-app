<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Ramsey',
            'lname' => 'Jordan',
            'email' => 'rjordan@gmail.com',
            'phone_number' => '973-777-0123',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
