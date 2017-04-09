<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredictionsController extends Controller
{
    public function create(){
        return view('predict');
    }

    public function result(){
        $this->validate(request(),[
          'state'=>'required',
          'region'=>'required',
          'crop'=>'required',
          'area'=>'required'
        ]);
        $state=request('state');
        $region=request('region');
        $crop=request('crop');
        $area=request('area');
        //adding logic for having $area greater than 0
       if($area<=0)
         return back()->withErrors([
             'error'=>'Area must be greater than 0'
            ]);
        $predicted_data=$state.'/'.$region.'/'.$crop.'_'.'predicted.json';
        $training_data=$state.'/'.$region.'/'.$crop.'_'.'training.json';
        return view("result",compact(['predicted_data','training_data','area','state','region','crop' ]));
    }

}
