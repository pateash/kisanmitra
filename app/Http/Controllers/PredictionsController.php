<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredictionsController extends Controller
{
    public function create(){
        return view('predict');
    }
    public function result(){
       return view("result");
    }

}
