<DOCTYPE html>
<html>

<head>

<title>CRUD operation</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<style type="text/css">
#contain{

width: 100%;
height: 7200px;
background-color: red;
}

.one{
	margin-top: 25px;
	margin: auto;
}

#one{
margin-top: 25px;
margin: auto;
}
.two{
margin-top: 25px;
margin: auto;
}

.three{
margin-top: 25px;
margin: auto;
}

.four{
margin-top: 25px;
margin: auto;
}

.five{

	margin-top: 25px;
	margin: auto;
	margin-left: 20px;
}
.five {

}

.merge{
	width: 450px;
	height: 660px;
	background-color: blue;
	margin: auto;
	padding-top: 20px;
	
}
h1{
	text-align: center;
	margin: auto;
	text-align: center;
}

</style>
</head>


<body>

<div id="clone">


<div id="sub">
<p>STUDENT REGISTRATION FORM </P>
</div>

</div>

<div id="contain">
<h1>Register Here</h1>

<form action="practiceCreate.php" method="POST">
	<div class="merge">
<div class="one">
<label for="name">write your name here:</label>
<input type="text" name="name" placeholder="input your full name">
</div>

<div id="one">
<label for="department">write your department:</label>
<input type="text" name="department" placeholder="write your department">
</div>

<div class="two">
<label for="regnumber">write your reg number:</label>
<input type="text" name="regno" placeholder="write your matric number">
</div>

<div class="three">
<label for="gender">write your reg number:</label>
<input type="text" name="gender" placeholder="select your gender">
</div>


<div class="four">
<label for="phonenumber">write your phonenumber:</label>
<input type="text" name="phonenumber" placeholder="write your phonenumber">
</div>

<div class="five">
<button type="submit">SUBMIT</button>
</div>





</form>
 


</div>



</body>
















</html>