<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Cheese Pizza',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'price' => 1.50,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Buffalo Wings',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/chicken.png',
            'price' => 4.50,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Italian BLT',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/sandwich.png',
            'price' => 7.50,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/chicken.png',
            'price' => 7.50,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
