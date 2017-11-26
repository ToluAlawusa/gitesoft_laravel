<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         DB::table('comments')->insert(array(
            array(
                "user_id" => '1',
                "film_id" => '2',
                "text" => 'very interesting',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            array(
                "user_id" => '1',
                "film_id" => '3',
                "text" => 'very scary',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "user_id" => '2',
                "film_id" => '2',
                "text" => 'even more beautiful in HD',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "user_id" => '2',
                "film_id" => '1',
                "text" => 'very catchy story-line',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "user_id" => '1',
                "film_id" => '1',
                "text" => 'poor, piss poor',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            
        ));
    }
}
