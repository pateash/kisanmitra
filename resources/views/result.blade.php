@extends("layouts.master")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover" id="ap-table">
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


<script type="text/javascript">

    var training_label=[];
    var training_val=[];
    var predicted_val=[];
    var predicted_label=[];


    $.getJSON("data/{{$training_data}}",function(data) {
          data=data.yeild; // so that we can get real data
          $.each(data,function(key,val) {
             if(training_label.length==0)
                 training_label.push(1975);
              else
                 training_label.push(training_label[training_label.length-1]+1);
            training_val.push(val);
        });
    });
    $.getJSON("data/{{$predicted_data}}",function(data) {
        data=data.yeild;
        $.each(data,function(key,val) {
            if(predicted_label.length==0){
                console.log("now length is "+predicted_label.length);

                console.log("value is "+training_label[training_label.length-1]+1);
                predicted_label=predicted_label.push(training_label[training_label.length-1]+1);
               console.log("now length is "+predicted_label.length);
            }
            else {
                //PROBLEM HERE IS THAT STRING CONCATINATION IS BEING DONE
                predicted_label.push(predicted_label[predicted_label.length - 1] + 1);
            }
           predicted_val.push(val);
        });
    });
    console.log(training_label);
    console.log(training_val);
    console.log(predicted_label);
    console.log(predicted_val);
//    for(var i=0;i<training_val.length;i++){
//              console.log("getting data");
//              $("#ap-row").append("<tr><td>"+labels[i]+"</td>"+"<td>"+training_val[i].toFixed(0)+"</td></tr>");
//    }
</script>
@endsection
