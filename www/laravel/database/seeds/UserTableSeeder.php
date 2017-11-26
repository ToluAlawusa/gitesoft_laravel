<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert(array(
            array(
                "name" => 'Tolu Samuel',
                "email" => 'tolusamuel@gmail.com',
                "password" => bcrypt('samuel1234'),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            array(
                "name" => 'Sam Smith',
                "email" => 'samsmith@gmail.com',
                "password" => bcrypt('smith1234'),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ),
            
        ));
    }
}
