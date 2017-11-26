<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('films')->insert(array(
            array(
                "name" => 'Prison Break',
                "description" => 'A brother deliberately commits a crime to land himself in prison',
                "release_date" => '27th July, 2017',
                "rating_id" => '3',
                "ticket_price" => '$54',
                "country" => 'U.S.A',
                "genre_id" => '2',
                "photo" => '/image1.jpg',
                "created_at" => Carbon::now(),
                "updated_at" => date("Y-m-d H:i:s")
            ),
            array(
                "name" => 'Fast & Furious',
                "description" => 'Fast cars, asphalts',
                "release_date" => '3rd April, 2018',
                "rating_id" => '1',
                "ticket_price" => '$23',
                "country" => 'England',
                "genre_id" => '1',
                "photo" => '/image2.jpg',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ),

            array(
                "name" => 'Transporters',
                "description" => 'High grade Chaffeur and Escort Service',
                "release_date" => '20th April, 2019',
                "rating_id" => '5',
                "ticket_price" => '$45',
                "country" => 'Canada',
                "genre_id" => '4',
                "photo" => '/image3.jpg',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ),
            
        ));
    }
}
