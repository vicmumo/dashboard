<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovieDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //pasted this
        Schema::create('movie_db', function (Blueprint $table){
            $table ->increments ('id');
            $table ->string ('genre');
            $table ->string ('title');
            $table ->binary ('logo');
            $table ->datetime ('releasedate');
            $table ->timestamps();
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
