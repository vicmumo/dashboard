<?php
//created by me   https://www.youtube.com/watch?v=5xl8fHic6AE
namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //add
    protected $table ='moviedb';
    protected $fillable = ['genre','title','logo','releasedate'];
}
