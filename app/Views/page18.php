<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Trigger Click on a Link</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
function doSomething(){
    alert("1");
}
function doSomething2(){
    alert("2");
}
$(document).ready(function(){
   

var i=0;
setInterval(function() {
  alertFunc(i);
  i++;  
}, 2000);

function alertFunc() {
    $("#a_"+i).click();
}

    //$("button").click(function(){
      //  $("a")[0].click();
    //});
});
</script>
</head> 
<body>
    <a href="#skyImage" id="a_0" onclick="doSomething()">Bookmark link to an image</a>
    <a href="#skyImage" id="a_1" onclick="doSomething2()">Bookmark link to an image</a>
    <button type="button">Trigger Click</button>
    <div style="margin-top: 800px;">
        <img src="/examples/images/sky.jpg" id="skyImage" alt="Cloudy Sky">
    </div>
</body>
</html>