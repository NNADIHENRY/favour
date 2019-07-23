<!DOCTYPE html>
<html>

<head>
<style type="text/css">
*{
	margin:0px 0px 0px 0px;
	padding:0px 0px 0px 0px;
}
.main{
	width: 100%;
	height: 700px;
	background:url("5.jpg");
	background-position: center;
}

.holder{
	width: 300px;
	height: 500px;
	margin: auto;
	background-color: blue;
	border: none;
	opacity: 0.7;
	border-radius: 50px;
}


input{

	
	height: 35px;

	font-size: 20px;
	margin-top: 50px;
	margin-left: 30px;

}


button{
	width: 100px;
	height: 40px;
	background-color: pink;
	border-radius: 10px;
	border: none;
	margin-left: 30px;
	margin-top: 20px;
}
</style>

</head>

<body>
<div class="main">





<div class="holder">
 <form action="acceptlogin.php" method="post">
 	
<input type="text" name="username" placeholder="username"><br>
 	
<input type="text" name="password" placeholder="password"><br>
 	
 	

<button type="submit"><a href="regscreen.php">Register</a></button>
<button type="submit">LOGIN</button>


</form>
</div>


</div>

</body>







</html>