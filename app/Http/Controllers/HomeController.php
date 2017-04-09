<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account');
    }

    public function change_password(){
     $this->validate(request(),
         [
         'password'=>'required|min:6|confirmed'
         ]);
        //if validation is successful, change password
        auth()->user()->password=bcrypt(request('password'));
        auth()->user()->save();
        //redirect again to account, with success message
        return redirect("/account?success=1");

    }

}
