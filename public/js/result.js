
$.getJSON("data/bhopal_banana_training.json",function(data) {
   console.log(data);
   data=data.yeild;
  $.each(data,function(key,val) {
     document.append(key+"-->"+val);

  });
});
document.writeln(x);