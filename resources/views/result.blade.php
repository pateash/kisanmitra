@extends("layouts.master")
@section('content')
<script src="/js/form.js"></script>
<p id="tdata" hidden>data/{{$training_data}}</p>
<p id="pdata" hidden>data/{{$predicted_data}}</p>

<div class="container">
        <div class="row">
            <div class="col-sx-8  col-md-4 table-responsive">
                <table class="table table-hover  table-bordered" id="ap-table">
                    <thead>
                    <tr>
                        <th>Year</th>
                        <th>Prediction</th>
                    </tr>
                    </thead>
                    <tbody id="ap-row">
                    <tr >
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    {{--<script type="text/javascript">--}}

        {{--var training_label=[];--}}
        {{--var training_val=[];--}}
        {{--var predicted_val=[];--}}
        {{--var predicted_label=[];--}}
        {{--var tlength,plength;--}}

        {{--$.getJSON("data/{{$training_data}}",function(data) {--}}
            {{--data=data.yeild; // so that we can get real data--}}
            {{--$.each(data,function(key,val) {--}}
{{--//                console.log("while appending, length",training_val.length);--}}
                {{--if(training_label.length==0)--}}
                    {{--training_label.push(1975);--}}
                {{--else--}}
                    {{--training_label.push(training_label[training_label.length-1]+1);--}}
                {{--tlength =training_val.push(val);--}}
            {{--});--}}
        {{--});--}}
        {{--$.getJSON("data/{{$predicted_data}}",function(data) {--}}
            {{--data=data.yeild;--}}
            {{--$.each(data,function(key,val) {--}}
{{--//                console.log("while appending, length",predicted_val.length);--}}
                {{--if(predicted_label.length==0)--}}
                    {{--predicted_label.push(training_label[training_label.length-1]+1);--}}
                {{--else--}}
                    {{--predicted_label.push(predicted_label[predicted_label.length - 1] + 1);--}}
                {{--plength=predicted_val.push(val);--}}
            {{--});--}}
        {{--});--}}
        {{--console.log(training_label);--}}
        {{--alert(training_label.length);--}}
        {{--console.log(training_val);--}}
        {{--console.log(predicted_label);--}}
        {{--console.log(predicted_val);--}}
        {{--console.log("length is  "+training_val.length);--}}
        {{--console.log("length is  "+predicted_val.length);--}}
        {{--console.log("length is  "+training_label.length);--}}
        {{--console.log("length is  "+predicted_label.length);--}}

        {{--for(var i=0;i<training_val.length;i++){--}}
            {{--console.log("getting data");--}}
            {{--$("#ap-row").append("<tr><td>"+training_label[i]+"</td>"+"<td>"+training_val[i].toFixed(0)+"</td></tr>");--}}
        {{--}--}}
    {{--</script>--}}
@endsection
