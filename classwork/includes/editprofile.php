<!DOCTYPE HTML>
<html>
<head><title></title>



<style type="text/css">
*{
	margin:0px 0px 0px 0px;
	padding:0px 0px 0px 0px;
}
.hold{

width: 100%;
height: 100vh;
background-color: grey;

}

.holder{
	width: 300px;
	height: 550px;
	background-color:orange;
	margin: auto;
	border-radius: 10px;
}

input{
	width: 150px;
	height: 30px;
	color:orange;
	font-size: 15px;
	margin-top: 10px;
	padding-left: 10px;
}

select{
	width: 150px;
	height: 30px;
	color: black;
	font-size: 15px;
	margin-top: 10px;

}
</style>








</head>
<body>
<div class="hold">
<div class="holder">
 <form action="#" method="POST">
 	<label for="username">please complete the following form:</label><br>
 	
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





</form>
</div>


</div>

</body>


</html>