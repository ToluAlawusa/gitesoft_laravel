<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('release_date');
            $table->integer('rating_id')->unsigned();
            $table->foreign('rating_id')->references('id')->on('ratings');
            $table->string('ticket_price');
            $table->string('country');
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
