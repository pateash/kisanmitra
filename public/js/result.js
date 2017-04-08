
$('document').ready(function () {
    makeTables();
});

function makeTables() {
    var counter = 1975;

    //getting file name from hidden tag
    var training_file = $("#tdata").text();
    var predicted_file = $("#pdata").text();
    var area=$("#areadata").text();

    // GETTING BOTH DATA IF NOT AVAILABLE THEN TRYING AGAIN AND AGAIN

    //getting the data from training file
    $.getJSON(training_file, function (data) {
        data = data.yeild;
        $.each(data, function (key, val) {
            $("#previous-data").append("<tr><td>" + counter + "</td>" + "<td>" + val + "</td></tr>");
            counter++;
        });
    }).done(function () {
        //getting data from predicted file if success
        $.getJSON(predicted_file, function (data) {
            data = data.yeild; // so that we can get real data
            $.each(data, function (key, val) {
                $("#predicted-data").append("<tr><td>" + counter + "</td>" + "<td>" + parseInt(val) + "</td></tr>");
                $("#predicted-data-2").append("<tr><td>" + counter + "</td>" + "<td>" + parseInt(val) + "</td>+<td>" + parseInt(val)*area + "</td></tr>");
                counter++;
            });
        }).done(function () {
            makeCharts();
            //reversing the data in table must be done after data prepared to make order consistent
            $(function(){
                $("tbody#previous-data").each(function(elem,index){
                    var arr = $.makeArray($("tr",this).detach());
                    arr.reverse();
                    $(this).append(arr);
                });
            });
        }).fail(function(){

             $("#charts").prepend("<div class='alert alert-danger col-md-6 col-md-offset-3' style='text-align:center'><span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>&nbsp;&nbsp;Error loading Charts</div>");
            console.log("some error occured inside");
        });
    }).fail(function(){
        var errormsg="<div class='alert alert-danger col-md-6 col-md-offset-3' style='text-align:center;'>";
            errormsg+="<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>";
            errormsg+="&nbsp;&nbsp;Error loading Charts<br><br><a onclick='location.reload()' style='color:#956295'>Reload&nbsp;&nbsp;<span class='glyphicon glyphicon-repeat'></span>"
            errormsg+="</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/predict' style='color:#956295'>Try Again&nbsp;&nbsp;<span class='glyphicon glyphicon-refresh'></span></a></div>";
             $("#charts").prepend(errormsg).css("cursor","hand");
             console.log("some error occured in 1");
    });
}


function makeCharts() {

    var cnv=$("#line-chart");

    //lable_arr will be same for both but training_values will be different.
    var temp_label_arr=[];
        $("#previous-data tr td:even").each(function(key,value){
       temp_label_arr.push($(value).html());
    });

    //we want only last 16 years label and data to visualize
    var label_arr=[];
    for(var i=temp_label_arr.length-17;i<temp_label_arr.length;i++)
          label_arr.push(temp_label_arr[i]);

    //predicted label  will remain same and append to the labels
     $("#predicted-data tr td:even").each(function(key,value){
        label_arr.push($(value).html());
     });

    //value also only needed from 2000
     var temp_training_value_arr=[];
    $("#previous-data tr td:odd").each(function(key,value){
        temp_training_value_arr.push($(value).html());
    });

    //stripping last 16 years data
    var training_value_arr=[];
    for(var i=temp_training_value_arr.length-17;i<temp_training_value_arr.length;i++)
        training_value_arr.push(temp_training_value_arr[i]);


     var predicted_value_arr=[];
    $("#predicted-data tr td:odd").each(function(key,value){
        predicted_value_arr.push($(value).html());
    });


    // console.log("showing computed arrays");
    // console.log(label_arr);
    // console.log(training_value_arr);
    // console.log(predicted_value_arr);
    // console.log("show ended");

    predicted_value_arr.unshift(training_value_arr[training_value_arr.length-1]);
for (var i = 0; i <16; i++) {
 predicted_value_arr.unshift(null);
}
// console.log(predicted_value_arr);


    // preparing data for line chart
    var ap_data_line = {
        labels: label_arr,
        datasets: [
            {
                label: "Yield (Hg/Hactare)",
                fill: false,
                lineTension: 0.5,
                backgroundColor: "#B7FF18",
                borderColor: "#B7FF18",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "yellow",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "white",
                pointHoverBorderColor: "#B7FF18",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                data: training_value_arr,
                spanGaps: false,
            },
            {
                label: "Yield Prediction (Hg/Hactare)",
                fill: false,
                lineTension: 0.5,
                backgroundColor: "#FFC303",
                borderColor: "#FFC303",

                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "#5FFF3F",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "yellow",
                pointHoverBorderColor: "#FFC303",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 10,
                data:predicted_value_arr ,
                spanGaps: false,
            }
         ]
    };


    // preparing data for bar chart
     var ap_data_bar = {
        labels: label_arr,
        datasets: [
            {
                label: "Yield (Hg/Hactare)",
                fill: false,
                lineTension: 0.5,
                backgroundColor: "#B7FF18",
                borderColor: "#B7FF18",
                borderCapStyle: 'butt',
                borderDash: [],

                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "white",
                pointHoverBorderColor: "#B7FF18",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 6,
                data: training_value_arr,
                spanGaps: false,
            },
            {
                label: "Yield Prediction (Hg/Hactare)",
                fill: false,
                lineTension: 0.3,
                backgroundColor: "#FFC303",
                borderColor: "#FFC303",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "yellow",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 6,
                data:predicted_value_arr ,
                spanGaps: false,
            }
         ]
    };

     //making line chart

    var line_chart= new Chart(document.getElementById("line-chart"),{
        type:['line'],
        data:ap_data_line,
    });

   var bar_chart= new Chart(document.getElementById('bar-chart'),{
     type:'bar',
     data:ap_data_bar
   });

 // console.log("charting finished finished");

}