<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert(array(
            array(
                "type" => 'Horror',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            array(
                "type" => 'Comedy',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "type" => 'Thriller',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "type" => 'Series',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),

            array(
                "type" => 'Tragic',
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            
        ));
    }
}
