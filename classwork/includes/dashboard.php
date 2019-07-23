<?php

session_start();

if(isset($_SESSION['firstname'])){

$name=$_SESSION['fullname'];
$email=$_SESSION['email'];
$address=$_SESSION['address'];
}
?>






<!DOCTYPE html>
<html>

<head>
	<title>dashboard</title>
<style type="text/css">
*{
	margin:0px 0px 0px 0px;
	padding:0px 0px 0px 0px;
}
.main{
	width: 100%;
	height: 700px;
	background:url("2.jpg");
	background-position: center;
}
.main p{
	word-spacing: 15px;
	letter-spacing: 10px;
	text-align: center;
	color: white;
	font-size: 40px;
}


input{
	
	
	height: 35px;

	font-size: 20px;
	margin-top: 10px;
	margin-left: 10px;

}


.nav{
	width: 100%;
	height: 100px;
	background-color: blue;
	float: left;
}

.nav  button{
	width: 130px;
	height: 40px;
	background-color: white;
	border-radius: 10px;
	border: none;
	float: right;
	margin-top: 25px;
	margin-right: 20px;
}

.nav  button:hover{
	width: 150px;
	height: 40px;
	background-color: gray;
	color: red;
	border-radius: 10px;
	border: none;
	font-size: 15px;
	float: right;
	margin-top: 25px;
	margin-right: 20px;
}
</style>

</head>

<body>
<div class="main">

<div class="nav">


	
	


	



	
		<button type="submit"><a href="editprofile.php">Edit Profile</a></button>
		<button type="submit"><a href="uploadprofile.php">Upload Profile</a></button>
		<button type="submit"><a href="statusupdate.php">Status Update</a></button>
		<button type="submit"><a href="groupchart.php">Group Chart</a></button>
		<button type="submit"><a href="loginscreen.php">Logout</a></button>
</div>
<p>Welcome <?php echo $name; ?></p>
</div>


</body>


</html>