<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ratings')->insert(array(
            array(
                "grade" => 'Very Poor',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            array(
                "grade" => 'Poor',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "grade" => 'Average',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "grade" => 'Good',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "grade" => 'Excellent',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            
        ));
    }
}
