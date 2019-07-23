<!DOCTYPE html>
<html>
<head>
<title>i want to learn Ajax</title>

<style>
#input{
    width:200px;
    height:80px;
    background-color:purple;
    color:black;
    border-radius:10px;
}


#button{
        width:150px;
    height:80px;
    background-color:blue;
    color:white;
    border-radius:10px;
}
</style>

<script src="jquery.js"></script>

</head>

<body>
<input type="text" name="username" placeholder="username"  id="username">
<button id="button" type="button" name="btn" onclick="display()">CLICK</button>
<p id="show"> Answer Shows here</p>
</body>


<script>
var usern = document.getElementById('username');


   function display(){

$.ajax({
type:'POST',
url:'two.php',
data:{ username: usern.value},

success: function(data){

    var show = document.getElementById('show');

    show.innerHTML = data;
}
});

 }


</script>
</html>