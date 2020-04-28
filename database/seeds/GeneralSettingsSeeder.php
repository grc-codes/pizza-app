<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Peters Pies',
            'logo_image_url' => '/img/restaurant-logo.png',
            'address_1' => '360 Dr. MLK Jr. Blvd',
            'address_2' => 'Floor 2',
            'city' => 'Newark',
            'state' => 'NJ',
            'zipcode' => '07103',
            'phone_number' => '973-123-4567',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
