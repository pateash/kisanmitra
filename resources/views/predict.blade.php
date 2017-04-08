@extends('layouts.master')
@section('content')
    <style>
        #smart-button{
            background-attachment: scroll;
            background-clip: border-box;
            background-color: rgb(149, 98, 149);
            background-image: none;
            background-origin: padding-box;
            background-position: 0% 0%;
            background-position-x: 0%;
            background-position-y: 0%;
            background-repeat: repeat;
            background-size: auto auto;
            border-bottom-color: rgb(255, 255, 255);
            border-bottom-style: none;
            border-bottom-width: 0px;
            border-image-outset: 0 0 0 0;
            border-image-repeat: stretch stretch;
            border-image-slice: 100% 100% 100% 100%;
            border-image-source: none;
            border-image-width: 1 1 1 1;
            border-left-color: rgb(255, 255, 255);
            border-left-style: none;
            border-left-width: 0px;
            border-right-color: rgb(255, 255, 255);
            border-right-style: none;
            border-right-width: 0px;
            border-top-color: rgb(255, 255, 255);
            border-top-style: none;
            border-top-width: 0px;
            box-sizing: border-box;
            color: rgb(255, 255, 255);
            cursor: pointer;
            font-family: "Oxygen-Regular";
            font-feature-settings: normal;
            font-kerning: auto;
            font-language-override: normal;
            font-size: 14.4px;
            font-size-adjust: none;
            font-stretch: normal;
            font-style: normal;
            font-synthesis: weight style;
            font-variant: normal;
            font-variant-alternates: normal;
            font-variant-caps: normal;
            font-variant-east-asian: normal;
            font-variant-ligatures: normal;
            font-variant-numeric: normal;
            font-variant-position: normal;
            font-weight: 400;
            line-height: 20.5667px;
            margin-bottom: 0px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 8.63333px;
            padding-bottom: 5.76667px;
            padding-left: 14.4px;
            padding-right: 14.4px;
            padding-top: 5.76667px;
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;

        }
    </style>


    <div class="container" style="margin-top:3em;margin-bottom:3em; ">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2" style="margin-top:-3em;" >
                <h1 id="heading" style="margin-bottom:0em;">Predict</h1>
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;&nbsp;&nbsp; {{$error}}
                        </div>
                    @endforeach
                @endif


                <form action="/result" method="post">
                    {{csrf_field()}}
                    {{--select state   --}}
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="state">Select state</label>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <select class="form-control" name="state" id="state" onclick='state_selected()'  required >
                                    <option value="empty">Select State</option>
                                    <option value="madhya_pradesh">Madhya Pradesh</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="gujrat">Gujrat</option>
                                    <option value="himachal_pradesh">Himachal Pradesh</option>
                                    <option value="maharastra">Maharastra</option>
                                    <option value="rajasthan">Rajasthan</option>
                                    <option value="uttarakhand">Uttarakhand</option>
                                    <option value="uttar_pradesh">Uttar Pradesh</option>
                                    <option value="west_bengal">West Bengal</option>
                                    <option value="assam">Assam</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    {{--select region--}}
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="region">Select Region</label>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <select class="form-control" name="region" id="region"  required>
                                    <option value="">Select Region</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{--select crop--}}
                    <div class="form-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="crop">Crop</label>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <select class="form-control" name="crop" id="crop"  required>
                                    <option value="">Select Crop</option>
                                    <option value="banana"> banana</option>
                                    <option value="barley">barley</option>
                                    <option value="ginger">ginger</option>
                                    <option value="grape">grape</option>
                                    <option value="greenpea">green pea</option>
                                    <option value="maize">maize</option>
                                    <option value="papaya">papaya</option>
                                    <option value="pineapple">pineapple</option>
                                    <option value="potato">potato</option>
                                    <option value="rice">rice</option>
                                    <option value="sugarcane">sugarcane</option>
                                    <option value="tea">tea</option>
                                    <option value="tomato">tomato</option>
                                    <option value="wheat">wheat</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{--submit area--}}
                    <div class="form-group" style="margin-top: 3em;margin-bottom: 3em;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="area">Your Agricultural  Area (Hactares)</label></h3>
                            </div>
                            <div class="panel-body">
                                <input type="number" name="area" class="form-control" id="area" placeholder="Area in Hectares" required>
                            </div>
                        </div>
                    </div>
                    {{--button--}}
                    <div class="pull-right form-group" style="margin-right:1em;margin-top:-3em;">
                        <input type="submit" id="smart-button" class="btn btn-primary hvr-wobble-bottom"  value="&nbsp;&nbsp; Submit &nbsp;&nbsp;     ">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/predict.js" charset="utf-8"></script>
@endsection
