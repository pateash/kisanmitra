@extends("layouts.master")

@section('content')
    {{--for getting the name of file dynamically--}}
    <span id="tdata" hidden>data/{{$training_data}}</span>
    <span id="pdata" hidden>data/{{$predicted_data}}</span>
    <span id="areadata" hidden>{{$area}}</span>
    <div class="container">

        <h1 id="heading" class="row" style="margin-top:1em;font-size:2em">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prediction Result</h1>
        {{--   STARTING CHARTS  --}}
        <h2 id="heading"  style="font-size:1.5em">#1 Charts</h2>
        <div class="row" id='charts'>
            {{--line chart--}}
            <div class="col-md-6 " >
                <canvas  id="line-chart"  width="100%" height="60%"></canvas>
            </div>
            {{--bar chart--}}
            <div class="col-md-6">
                <canvas id="bar-chart" width="100%" height="60%">
                </canvas>
            </div>
        </div>
        {{--CHARTS ENDS--}}

        {{--STARTING  RESULT INFO--}}
        <h2 id="heading"  style="font-size:1.5em;margin-top:1em;margin-bottom: 1em">#2 Result Info</h2>

        {{--SHOWING FORMULAE--}}
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <code >
                    Total Predicted Yield = (Area Harvested) * (Predicted Yield)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    = ({{$area}}) * (Predicted Yield)
                </code>
                <hr>
            </div>
        </div>

        <div class="row">
            {{-- SIMPLE INPUT INFO --}}
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover table-bordered" style="text-align: center;font-size:1em;font-family: 'Viga-Regular';color: #956295;">
                            <tbody>
                            <tr>
                                <td>State</td>
                                <td>{{ucfirst(str_replace("_"," ",$state))}}</td>

                            </tr>
                            <tr>
                                <td>Region</td>
                                <td>{{ucfirst($region)}}</td>

                            </tr>
                            <tr>
                                <td>Crop</td>
                                <td>{{ucfirst($crop)}}</td>

                            </tr>

                            <tr>
                                <td>Your Field Area</td>
                                <td>{{$area}} Hactares</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            {{--PREDICTION CALCULATION--}}
            <div class="col-md-6">
                <div class="panel panel-default" style="font-size:1em;font-family: 'Viga-Regular';color: #956295;">
                    <div class="panel-body">

                        <table  class=" table-responsive table table-hover  table-bordered" id="ap-table">
                            <thead>
                            <tr>
                                <th>Year</th>
                                <th>Predicted Yield</th>
                                <th>Total Predicted Yield</th>
                            </tr>
                            </thead>
                            <tbody id='predicted-data-2'>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        {{--ENDING RESULT INFO--}}
    </div>



    {{--TABLES--}}
    <h2 id="heading"  style="font-size:1.5em;margin-bottom: 1em">#3 Complete Data</h2>
    <div class="container" style="font-size:1em;font-family: 'Viga-Regular'; color: #956295;;">
        <div class="row">
            <div class="col-md-6 panel">
                <div class="panel-body">
                <table   class="table table-hover  table-bordered table-responsive" >
                    <thead>
                    <tr>
                        <th>Year</th>
                        <th>Yield (Hg per Hactare)</th>
                    </tr>
                    </thead>
                    <tbody id="previous-data">
                    <tr >
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <div class="col-md-6 panel">
                <div class="panel-body">
                <table  class=" table-responsive table table-hover  table-bordered" id="ap-table">
                    <thead>
                    <tr>
                        <th>Year</th>
                        <th>Predicted Yield (Hg per Hactare)</th>
                    </tr>
                    </thead>
                    <tbody id='predicted-data'>
                    <tr >
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/chart.min.js"></script>
    <script src="/js/result.js"></script>

@endsection
