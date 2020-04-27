<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Peters Pies is an American restaurant chain and international franchise which was founded in 1958 in Wichita, Kansas by Dan and Frank Carney.',
            'keywords' => 'pizza, local pizza, peter pies',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
