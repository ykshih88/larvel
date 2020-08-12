<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('search',['name'=>['123','567'],
                                'name2'=>'456'
    ]);
});

Route::get('/get_id', 'TableController@selectMovieByIdWithResource')->name('get_id');
Route::get('/rating', 'TableController@selectMovieByIdAndRating')->name('rating');
Route::get('/delete', 'TableController@Delete_by_id_and_movie_id')->name('delete');
Route::get('/update', 'TableController@Update_by_id_and_movie_id')->name('update');


Route::post('/example_post', 'TableController@selectMovieByIdwithRelation')->name('example_post');
Route::get('/display/{name}','TableController@RenderExample')->name('render_example');
