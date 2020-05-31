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
//about
Route::get('/team',function(){
    return view("team");
});

Route::get('/about',function(){
    return view("about");
});
    ;
Route::get('/how-to-use',function(){
    return view("how_to_use");
});

Route::get("/discuss",function (){
    return view("discuss");
});


//prediction routes
Route::get('/predict','PredictionsController@create');
Route::get("/result",function (){
    return redirect('/predict')->withErrors(
        [
            'error'=>"Please fill form this to continue..."
        ]);
});
Route::post('/result','PredictionsController@result');


// authorization routes
// Auth::routes();

// Route::get('/account'   , 'HomeController@index');

// //change password
// Route::patch('/password','HomeController@change_password');

// //contact routes
// Route::get('/contact','ContactsController@create');

// Route::post("/contact",'ContactsController@store');

// Route::get("/reset",function(){
//     return view('auth.passwords.email');
// });


