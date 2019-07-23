//<?php
/*session_start();

if ($_SESSION['message']) {
	
	echo'

<script>

	setTimeout(function(){

		alert("'.$_SESSION['message'].'");

	},1000);
	


</script>


	';





*/


//?> 







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
	height: 690px;
	background:url("1.jpg");
	background-position: center;
	padding-top: 10px;
}
.main p{
	text-align: center;
	color: white;
	word-spacing: 15px;
	letter-spacing: 10px;
	font-size: 50px;
}

.holder{
	width: 300px;
	height: 500px;
	margin: auto;
	background-color: red;
	border-radius: 20px;
	margin-top: 25px;
}
select{
	margin-left: 10px;
		font-size: 20px;
	margin-top: 10px;
		height: 35px;
}
input{
	
	
	height: 35px;

	font-size: 20px;
	margin-top: 10px;
	margin-left: 20px;

}

input .red{


}

h3{
	text-align: center;
	color: white;
	font-size: 20px;
}

.main #click{
	text-align: center;
}
button{
	width: 100px;
	height: 40px;
	background-color: pink;
	border-radius: 10px;
	border: none;
}

</style>

</head>

<body>
	
<div class="main">
	<p>Smart Computers</p>
<div class="nab"></div>
<div class="holder">
 <form action="create.php" method="POST">
 	
<input type="text" name="fullname" placeholder="fullname"><br>
 	
<input type="text" name="username" placeholder="username"><br>
 	
<input type="password" name="password" placeholder="password"><br>

 	 	
<input type="password" name="comfirmpassword" placeholder="confirm password"><br>
<input type="email" name="email" placeholder="email"><br>
 	
<input class="red" type="radio" name="gender" value="male">male
<input class="red" type="radio" name="gender" value="female">female<br>
 	
<input type="text" name="address" placeholder="address"><br>
<select name="country">
	<option value="country">country</option>
	<option  value="Nigeria">Nigeria</option>
	<option  value="USA">United State of America</option>
	<option  value="France">France</option>
	<option  value="Malaysia">Malaysia</option>
	<option  value="Holland">Holland</option>
</select><br>
<input class="red" type="radio" name="status" value="single">single
<input class="red" type="radio" name="status" value="married">married<br>




<button type="submit">SIGN UP</button>
<button type="submit"><a href="loginscreen.php">LOGIN</a></button>


</form>
</div>

<h3>Already Registered</h3>
<a id="click" href="loginscreen.php">Click here</a>

</div>

</body>




</html>