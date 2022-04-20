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
})->name("comics.index");


Route::get("/characters",function(){
    return view("pages.characters");
})->name("characters.index");

Route::get("/movies",function(){
    return view("pages.movies");
})->name("movies.index");


Route::get("comics/{id}",function($id){
    $fumetti = config("comics");
    abort_if(!isset($fumetti[$id]),404);
    $detail = $fumetti[$id];
    return view("pages.detail",[
        "fumetto" =>$detail
    ]);
})->where("id","[0-9]+")->name("fumetti.show");