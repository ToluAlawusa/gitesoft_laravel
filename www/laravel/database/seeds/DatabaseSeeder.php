<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

	    // $this->call(RatingTableSeeder::class);
	    // $this->call(GenreTableSeeder::class);
	    // $this->call(FilmTableSeeder::class);
	    // $this->call(UserTableSeeder::class);
	    $this->call(CommentTableSeeder::class);
    }
}
