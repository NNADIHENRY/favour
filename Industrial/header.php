<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Industrial Training Record Tracking</title>
<script type="text/javascript" src="jquery-2.1.4.js"></script>
<link rel="stylesheet" href="style.css" />
<style>
    .white {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        background-color: white;
		box-shadow:1px -1px 1px gray, -1px 1px 1px gray;
		border-radius:7px;
        z-index:1002;
        overflow: auto;
    }
    .white_content {
        display: none;
        position: absolute;
        top: 5%;
        left: 10%;
        width: 80%;
        height: 90%;
        padding: 16px;
        background-color: white;
		box-shadow:1px -1px 1px gray, -1px 1px 1px gray;
		border-radius:7px;
        z-index:1002;
        overflow: auto;
    }
	#con{
		width:90%;
		height:90%;
		margin:auto;
		background:#090;
	}
</style>
<script type="text/javascript">
$(document).ready(function() {
	
	
	 $("#img2").animate({width:"10px",opacity:0},
   9990,function(){
  $("#img2").animate({width:"100%",opacity:100},
		 10);
	});
	//end of do animate*/
	message();
});

function showprev(){
	$(".prev").show();
}
function hideprev(){
	$(".prev").hide();
}

function doanimate(){
	 $("#img2").animate({width:"10px",opacity:0},
   9990,function(){
   $("#img2").animate({width:"100%",opacity:100},
		 10);
	});
	
}
function message()
{
var t=setInterval("alertMsg()",10000);
var t2=setInterval("doanimate()",10000);
}
var i=1;
var j=2;

function alertMsg()
{
	if(j>7){
	j=2;
}
if(i>8){
	i=1;
}
document.getElementById("img1").src="images/training"+i+".jpg";
document.getElementById("img2").src="images/training"+j+".jpg";

i=i+1;
j=j+1;
}

function myshow(){
	document.getElementById('light').style.display='block';
}
function myhide(){
	document.getElementById('light').style.display='none';
}

</script>

</head>
<?php



?>

<body>
<div id="main">
<div id="banner">
<div style="float:right; width:80%;">
<div id ="mylog">
<form method="post"  action="signin.php">
<table>
<tr>
<td id="formtd">Username</td>
<td id="formio"><input type="text" name="username"  /></td>
</tr>
<tr>
<td id="formtd">Password</td>
<td id="formio"><input type="text" name="password"  /></td>
</tr>
<tr>
<td></td>
<td id="formio"><input type="submit" name="login"  value="Sign In"/></td>
</tr>
</table>
</form>

</div>
<img id="img4" src="images/banner.png" width="40%" height="120px" />
</div>
<img id="img3" src="images/siwes-logo.gif" width="150px" height="150px" />
</div>
<div id="navbar">
<div style=" margin-top:20px;margin-right:20px;width:30%;float:right">
<img src="images/check-white.png" /><a id="sign" href="javascript:void(0)" onclick = "document.getElementById('lt').style.display='block'"> Admin</a>
<img style="margin-left:10px;" src="images/edit-white.png" /><a id="sign" href="javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"> Register</a>
</div>
<div id="nav2">
<ul id="myul">
<li id="myli"><img src="images/home-white.png" /><a href="index.php">Home</a></li>
<li id="myli"><img src="images/eye-white.png"/><a href="javascript:void(0)" onclick = "document.getElementById('lt').style.display='block'">View Students</a></li>
<li id="myli"><img  src="images/user-white.png" /><a href="about.php">About</a></li>
<li id="myli"><img src="images/mail-white.png" /><a href="contact.php">Contact</a></li>
</ul>
</div>


<div>

<div id="info" >
