<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'Pizza',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Chicken',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/chicken.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Sandwiches',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/sandwich.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pasta',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pasta.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Bread & Sides',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/bread.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza1',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza2',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza3',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza4',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza5',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza6',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'Pizza7',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eius at in voluptatum autem illum quo vel magnam nesciunt! Sapiente praesentium dignissimos et minima reprehenderit atque asperiores architecto qui amet?',
            'image_url' => '/img/pizza-slice.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
