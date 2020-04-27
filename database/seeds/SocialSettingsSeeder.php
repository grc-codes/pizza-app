<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.facebook.com/pizzahutus',
            'twitter_url' => 'https://twitter.com/pizzahut',
            'instagram_url' => 'https://www.instagram.com/pizzahut/',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
