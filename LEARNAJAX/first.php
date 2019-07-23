<!DOCTYPE html>

<html>
<head>
<title>



</title>
<style>
#btn{

    width:200px;
    height:100px;
    background-color:blue;
    color:white;





}

</style>
</head>
<body>
<input id="month" type="text" name="month">

<button id="btn" type="button" onclick="display()">GET</button>

<p id="result"> Answer Shows here</p>

</body>



<script src="jquery.js"> </script>
<script>

var getmonth = document.getElementById('month');

function display(){

$.ajax({
type:'POST',
url:'second.php',
data:{ month: getmonth.value},

success: function(data){

    var show = document.getElementById('result');

    show.innerHTML = data;
}
});

 }



</script>



</html>