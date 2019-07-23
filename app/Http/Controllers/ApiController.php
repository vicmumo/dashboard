<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie; //hii imewekwa hapa. shows that you use the model in folder App. after this, proceed to movie.php
class ApiController extends Controller
{
    //to use API to feed data into db
     //first is a function to create
     public function Create(Request $request){
      //create a variable to store the details, in this case, movies
        $movies = new Movie(); //movie here refers to the model you created

        //create a variable
        //id genre title logo releasedate
        $movies -> genre = $request->input('genre');
        $movies -> title = $request->input('title');
        $movies -> logo = $request->input('logo');
        $movies -> releasedate = $request->input('releasedate');

        $movies->save();
        return response()->json($movies);

     }

}
