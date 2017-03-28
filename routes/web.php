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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/predict', function () {
    return view('predict');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

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
Route::get('/contact',function(){
    return view("contact");
});