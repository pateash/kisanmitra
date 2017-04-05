@extends("layouts.master")

@section('content')
    {{--for getting the name of file dynamically--}}
    <span id="tdata" hidden>data/{{$training_data}}</span>
    <span id="pdata" hidden>data/{{$predicted_data}}</span>

    <div class="container">
        <h1 id="heading" class="row" style="margin-top:1.5em;font-size:2.5em">Prediction Result</h1>

        {{--   STARTING CHARTS  --}}
        <h2 id="heading"  style="font-size:1.5em">#1 Charts</h2>
        <div class="row">
            {{--line chart--}}
            <div class="col-md-6 ">
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
        <h2 id="heading"  style="font-size:1.5em">#2 Result Info</h2>
        <div class="row">
         bs3-
        </div>

        {{--ENDING RESULT INFO--}}
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sx-6  col-md-4 table-responsive">
                <table   class="table table-hover  table-bordered">
                    <thead>
                    <tr>
                        <th>Year</th>
                        <th>Yeild (Hg per Hactare)</th>
                    </tr>
                    </thead>
                    <tbody id="previous-data">
                    <tr >
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sx-6  col-md-4">
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
    <script src="/js/chart.min.js"></script>
    <script src="/js/result.js"></script>

@endsection
