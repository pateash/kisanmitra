<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredictionsController extends Controller
{
    public function create(){
        return view('predict');
    }

    public function result(){
        $state=request('state');
        $region=request('region');
        $crop=request('crop');
        $area=request('area');

        $predicted_data=$state.'/'.$region.'/'.$crop.'_'.'predicted.json';
        $training_data=$state.'/'.$region.'/'.$crop.'_'.'training.json';
        return view("result",compact(['predicted_data','training_data','area','state','region','crop' ]));
    }

}
