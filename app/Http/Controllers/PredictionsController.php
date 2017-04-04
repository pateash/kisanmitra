<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredictionsController extends Controller
{
    public function create(){
        return view('predict');
    }
    public function result(){

        #checking if the request came from "/predict" or not,
        # amazing thing is that on reload we get same HTTP_REFERER
        if(!isset($_SERVER["HTTP_REFERER"]) || basename($_SERVER["HTTP_REFERER"])!="predict")
        {
            return redirect('/predict')->withErrors([
                'error'=>'Please fill form first for Getting result'
            ]);
        }
        //dd(request());
        $state=request('state');
        $region=request('region');
        $crop=request('crop');
        $area=request('area');

        $predicted_data=$state.'/'.$region.'_'.$crop.'_'.'predicted.json';
        $training_data=$state.'/'.$region.'_'.$crop.'_'.'training.json';

        echo 'passing value to result';
        return view("result",compact(['predicted_data','training_data','area']));
    }

}
