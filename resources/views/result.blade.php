@extends("layouts.master")

@section('content')
    {{--for getting the name of file dynamically--}}
    <span id="tdata" hidden>data/{{$training_data}}</span>
    <span id="pdata" hidden>data/{{$predicted_data}}</span>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sx-12">
                <canvas  id="line-chart"  width="100%" height="100%">

                </canvas>


            </div>
            <div class="col-md-6 col-sx-12">
                <canvas id="bar-chart" width="100%" height="100%">

                </canvas>
            </div>


        </div>


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
