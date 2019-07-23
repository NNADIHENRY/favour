<!DOCTYPE html>

<html>

<head>
<title>

</title>

<style>
#btn{
    width:150px;
    height:100px;
    background-color:blue;
    color:white;
}

</style>

</head>

<body>


<input type="text" name="firstname" id="first" placeholder="input your first name">
<input type="text" name="secondname" id="second" placeholder="input your middle name">

<button id="btn"type="submit" onclick="show()" >COLLECT</button>

<p id="result"> Answer Shows here</p>

</body>

<script src="jquery.js"></script>
<script>




var getfirstname = document.getElementById('first');

var getsecondname = document.getElementById('second');

function show(){

$.ajax({
type:"POST",
url:'classworktwo.php'                                                                                                                                                                                                                                                                                           ,
data:{ firstname: getfirstname.value, secondname: getsecondname.value},

success: function(data){

    var get = document.getElementById('result');

    get.innerHTML = data;
}

});

 }




</script>




</html>