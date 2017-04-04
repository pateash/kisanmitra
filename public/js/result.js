
$('document').ready(function () {
    makeTables();
});
// $(document).ajaxSuccess(function(){
//     makeLineChart();
//     makeBarChart();
// });

function makeTables() {
    var training_label=[];
    var training_val=[];

    var predicted_val=[];
    var predicted_label=[];
    var counter = 1975;
    var training_file = $("#tdata").text();
    var predicted_file = $("#pdata").text();
    var training_label=[];
    var training_val=[];

    var predicted_val=[];
    var predicted_label=[];


    //getting the data from training file
    $.getJSON(training_file, function (data) {
        data = data.yeild;
        $.each(data, function (key, val) {
            $("#previous-data").append("<tr><td>" + counter + "</td>" + "<td>" + val + "</td></tr>");
            training_label.push(counter);
            training_val.push(val);
            counter++;
        });
    });

    //getting data from predicted file
    $.getJSON(predicted_file, function (data) {
        data = data.yeild; // so that we can get real data
        $.each(data, function (key, val) {
            predicted_label.push(counter);
            predicted_val.push(val);
            $("#predicted-data").append("<tr><td>" + counter + "</td>" + "<td>" + val + "</td></tr>");
            counter++;
        });
    });
    $(function(){
        $("tbody#previous-data").each(function(elem,index){
            var arr = $.makeArray($("tr",this).detach());
            arr.reverse();
            $(this).append(arr);
        });
    });
}

function makeLineChart() {

    var cnv=$("#line-chart");

    //TODO: may be the problem is because of the fact that ajax loads after we have done these things.

    //TODO: create arrays of lables and data
    var label_arr=[];
        $("#previous-data tr td:odd").each(function(key,value){
       label_arr.push($(value).html());
    });
    var value_arr=[];
    $("#previous-data tr td:even").each(function(key,value){
        value_arr.push($(value).html());
    });
    console.log("something happening");
    console.log(label_arr);
    console.log(value_arr);

    //TODO: make data for charting using arrays
    // var ap-data={
    //     data-set:[{
    //
    //    }],
    // };

    //TODO: make chart
    // var chart=new Chart(cnv,{
    //     label:'Predictions',
    //     type:'line',
    //    data:ap-data
    // });



}
function makeBarChart(){
//TODO: make bar chart with same way as line chart


}


