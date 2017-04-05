
$('document').ready(function () {
    makeTables();
});

function makeTables() {
    var counter = 1975;

    //getting file name from hidden tag
    var training_file = $("#tdata").text();
    var predicted_file = $("#pdata").text();


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
                $("#predicted-data").append("<tr><td>" + counter + "</td>" + "<td>" + val + "</td></tr>");
                counter++;
            });
        }).done(function () {
            makeLineChart();
            makeBarChart();
            //reversing the data in table must be done after data prepared to make order consistent
            $(function(){
                $("tbody#previous-data").each(function(elem,index){
                    var arr = $.makeArray($("tr",this).detach());
                    arr.reverse();
                    $(this).append(arr);
                });
            });
        });
    });
}


function makeLineChart() {

    var cnv=$("#line-chart");

    //lable_arr will be same for both but training_values will be different.
    var label_arr=[];
        $("#previous-data tr td:even").each(function(key,value){
       label_arr.push($(value).html());
    });
     $("#predicted-data tr td:even").each(function(key,value){
        label_arr.push($(value).html());
     });

    var training_value_arr=[];
    $("#previous-data tr td:odd").each(function(key,value){
        training_value_arr.push($(value).html());
    });
    var predicted_value_arr=[];
    $("#predicted-data tr td:odd").each(function(key,value){
        predicted_value_arr.push($(value).html());
    });


    console.log("showing computed arrays");
    console.log(label_arr);
    console.log(training_value_arr);
    console.log(predicted_value_arr);


    // preparing data for line chart
    var ap_data_line = {
        labels: label_arr,
        datasets: [
            {
                label: "Previous Year Crop Yield",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 10,
                data: training_value_arr,
                spanGaps: false,
            },
            {
                label: "Predicted Next Five Year Crop Yield",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 10,
                data: predicted_value_arr,
                spanGaps: false,
            }
        ]
    };

     //making line chart

    var line_chart= new Chart(document.getElementById("line-chart"),{
        type:['line'],
        data:ap_data_line
    });


 console.log("make line chart finished");

}
function makeBarChart(){
//TODO: make bar chart with same way as line chart


}


