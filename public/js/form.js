
var training_label=[];
var training_val=[];

var predicted_val=[];
var predicted_label=[];
var counter=1975;
$.getJSON("/data/mp/bhopal_banana_training.json",function(data) {
    data=data.yeild;
    $.each(data,function(key,val) {
        //     training_label=training_label.concat([counter]);
        // training_val=training_val.concat([val]);
         $("#ap-row").append("<tr><td>"+counter+"</td>"+"<td>"+val+"</td></tr>");
         counter++;
    });
});
$.getJSON("/data/mp/bhopal_banana_predicted.json",function(data) {
    data=data.yeild; // so that we can get real data
    $.each(data,function(key,val) {
        // predicted_label=predicted_label.concat([counter]);
        // predicted_val=predicted_val.concat([val]);
        $("#ap-row").append("<tr><td>"+counter+"</td>"+"<td>"+val+"</td></tr>");
        counter++;
    });
});
// console.log(predicted_val);
// console.log(predicted_val.length);
// for(var i=0;i<training_val.length;i++){
//     console.log("getting data");
//     $("#ap-row").append("<tr><td>"+training_label[i]+"</td>"+"<td>"+training_val[i].toFixed(0)+"</td></tr>");
//}
