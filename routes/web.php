<?php

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

//home
Route::get('/', function () {
    return view('welcome');
});

//account
Route::get("/account",function(){
  return "we will show you your account";
});


//about
Route::get('/team',function(){
    return view("team");
});

Route::get('/about',function(){
    return view("team");
});
    ;
Route::get('/how-to-use',function(){
    return view("team");
});

Route::get("/discuss",function (){
    return view("discuss");
});


//prediction routes
Route::get('/predict','PredictionsController@create');
Route::get('/result','PredictionsController@result');


// authorization routes
Auth::routes();

Route::get('/home', 'HomeController@index');

//contact routes
Route::get('/contact','ContactsController@create');

Route::post("/contact",'ContactsController@store');
