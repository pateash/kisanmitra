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
                            {{$error}}
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
                                <select class="form-control" name="state" id="state" required>
                                    <option value="">Select State</option>
                                    <option value="mp">Madhya Pradesh</option>
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
                                    <option value="bhopal">Bhopal</option>
                                    <option value="jabalpur">Jabalpur</option>
                                    <option value="gwalior">Gwalior</option>
                                    <option value="indore">Indore</option>
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

                                    <option value="wheat">Wheat</option>
                                    <option value="maze">Maze</option>
                                    <option value="soyabean">Soyabean</option>
                                    <option value="rice">Rice</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    {{--submit area--}}
                    <div class="form-group" style="margin-top: 3em;margin-bottom: 3em;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="area">Agricultural  Area</label></h3>
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


@endsection

