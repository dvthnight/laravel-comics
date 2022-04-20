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

Route::get('/comics', function () {
    $fumetti = config("comics");
    return view('pages.comics')->with("fumetti",$fumetti);
});


Route::get("/characters",function(){
    return view("pages.characters");
});

Route::get("/movies",function(){
    return view("pages.movies");
});
