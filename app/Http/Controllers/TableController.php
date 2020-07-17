<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Http\Resources\RatingResource;
use App\Http\Resources\RatWithMovieResource;

class TableController extends Controller
{
    //
    public function experimentFiled(Request $request){
        #$userid = $request->input('userid');
        $userid = 5;
        $movies = Rating::where('user_id', 5)->get();
        Rating::where('user_id', 5)->get();
        #foreach($movies as $movie){
        #    $movie_id = $movie->movieId;
        #    $rating = $movie->rating;
        #    $user_id = $movie->userId;
        #}
    }

    public function selectMovieByIdWithResource(Request $request){
        $userid = $request->input('user_id');
        $movies = Rating::where('user_id', $userid)->get();
        return RatingResource::collection($movies);
    }

    public function selectMovieByIdAndRating(Request $request){
        $userid = $request->input('user_id');
        $movieid = $request->input('movie_id');
        $score = $request->input('rating');
        Rating::insert(array(
            'user_id'     =>   $userid,
            'movie_id'   =>   $movieid,
                'rating' =>   $score
            )
        );
        $movies = Rating::where([
            ['user_id', '=', $userid],
            ['movie_id', '=', $movieid],
            ['rating', '=', $score],
        ])->get();
        return RatingResource::collection($movies);
    }

    public function Delete_by_id_and_movie_id(Request $request){
        $userid = $request->input('user_id');
        $movieid = $request->input('movie_id');

        return Rating::where([
            ['user_id', '=', $userid],
            ['movie_id', '=', $movieid],
        ])->delete();
    }

    public function Update_by_id_and_movie_id(Request $request){
        $userid = $request->input('user_id');
        $movieid = $request->input('movie_id');
        $score = $request->input('rating');
        return Rating::where([
                ['user_id', '=', $userid],
                ['movie_id', '=', $movieid],
            ])->update(['rating' => $score]);
    }

//    public function selectMovieByIdwithRelation(Request $request){
//        $userid = $request->input('user_id');
//        #$userid = 5;
//        $movietitle = Rating::with(['movie'])->where('user_id', $userid)->get();
//        return RatWithMovieResource::collection($movietitle);
//    }
//
//    public function RenderExample(String $name){
//        $filename = 'doraemon.jpg';
//        return view('hello', ['name' => $name ,'filename'=>$filename]);
//    }
}

