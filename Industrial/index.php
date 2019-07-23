
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

</div>
<div id="images">
<img id="img1" src="images/training4.jpg" width="100%" height="100%" />
<img id="img2" src="images/training6.jpg" width="100%" height="100%" />
</div>

<div>

<div id="info">
<h2 style=" text-align:center;color:#063;">SIWES</h2>
<p style="text-align:justify;">Training is a key factor in enhancing the efficiency and expertise of the workforce. The Students Work Experience (SIWES) program prepares students for labor markets. It has become an innovative phenomenon in human resources development and training in Nigeria. The library profession, like other professions, is dynamic. This dynamism is in response to Information and Communication Technology (ICT). With the introduction of ICT into the field of library and information science (LIS), it has become imperative that library and information science practitioners possess the skill needed to function effectively in an ICT environment.<br /><br />

Lawal (2002), quoting Francis Bacon, describes a professional as one who has mastered certain specialized intellectual techniques, and adds that it was the intellectual content which came to distinguish the profession from the medieval craft. According to him, increased specialization of skills means that the term “profession” is now used for certain occupations which enjoy prestige and which give esoteric service. Such professions include architects, surveyors, doctors, librarians and information scientists, and engineers, among others.
</p>
</div>
<div>


</div>
 <div id="lt" class="white">
 <div style="height:70px; width:400px;">
<img style="float:right;" src="images/banner.png" width="240px" height="70px" />
<img  src="images/siwes-logo.gif" width="70px" height="70px" />
</div><H2 style=" text-align:center;color:green;">Enter Your Login Details</H2><hr />

<form method="post"  action="admin.php">
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

<div id="light" class="white_content">

<div style="height:70px; width:1080px;">
<img style=" margin-right:400px;float:right;" src="images/banner.png" width="300px" height="70px" />
<img  src="images/siwes-logo.gif" width="70px" height="70px" />
</div>
<h3 style="color:green; text-align:center;">Please carefully fill the following fields in the IT form</h3>

<div style="width:400px; float:right;">
<form method="post" action="register.php" enctype="multipart/form-data">
<table>
<tr>
<td id="formtd">IT year</td>
<td id="formio"><input type="text" name="year" /></td>
</tr>
<tr>
<td id="formtd">Have you secured it placement?</td>
<td id="formio"><input type="text" name="secure" /></td>
</tr>
<tr>
<td id="formtd">Placement state</td>
<td id="formio"><input type="text" name="pstate" /></td>
</tr>
<tr>
<td id="formtd">Placement number</td>
<td id="formio"><input type="text" name="pnum" /></td>
</tr>
<tr>
<td id="formtd">Name of Company</td>
<td id="formio"><input type="text" name="compname" /></td>
</tr>
<tr>
<td id="formtd">Period</td>
<td id="formio"><input type="text" name="period" /></td>
</tr>
<tr>
<td id="formtd">Duration of IT</td>
<td id="formio"><input type="text" name="duration" /></td>
</tr>
<tr>
<td id="formtd">Company Address</td>
<td id="formio"><input type="text" name="address" /></td>
</tr>
<tr>
<td id="formtd">Company Phone Number</td>
<td id="formio"><input type="text" name="compphone" /></td>
</tr>
<tr>
<td id="formtd">Company Email Address</td>
<td id="formio"><input type="text" name="compemail" /></td>
</tr>
<tr>
<td id="formtd">Bank Name</td>
<td id="formio"><input type="text" name="bankname" /></td>
</tr>
<tr>
<td id="formtd">Account Number</td>
<td id="formio"><input type="text" name="accountnum" /></td>
</tr>
<tr>
<td id="formtd">Sort Code</td>
<td id="formio"><input type="text" name="sortcode" /></td>
</tr>
<tr>
<td id="formtd">Payment Status</td>
<td id="formio"><select name="pstatus">
<option>Not Paid</option>
<option>Paid</option>
</select></td>
</tr>
<tr>
<td id="formtd"></td>
<td id="formio"><input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</div>


<div style="width:400px; margin-left:60px;">
<table>
<tr>
<td id="formtd">Surname</td>
<td id="formio"><input type="text" name="surname" /></td>
</tr>
<tr>
<td id="formtd">First Name</td>
<td id="formio"><input type="text" name="firstname" /></td>
</tr>
<tr>
<td id="formtd">Middle Name</td>
<td id="formio"><input type="text" name="midname" /></td>
</tr>
<tr>
<td id="formtd">Sex</td>
<td id="formio"><select name="sex">
<option>Male</option>
<option>Female</option>
</select></td>
</tr>
<tr>
<td id="formtd">Date of Birth</td>
<td id="formio"><input type="text" name="dob" /></td>
</tr>
<tr>
<td id="formtd">State of Origin</td>
<td id="formio"><input type="text" name="state" /></td>
</tr>
<tr>
<td id="formtd">Nationality</td>
<td id="formio"><select name="nationality">
<option>Nigeria</option>
<option>Zambia</option>
<option>USA</option>
<option>China</option>
<option>Rusia</option>
<option>Togo</option>
<option>Cameroune</option>

</select></td>
</tr>
<tr>
<td id="formtd">Phone Number</td>
<td id="formio"><input type="text" name="phone" /></td>
</tr>
<tr>
<td id="formtd">Email Address</td>
<td id="formio"><input type="text" name="email" /></td>
</tr>
<tr>
<td id="formtd">Contact Address</td>
<td id="formio"><input type="text" name="contact" /></td>
</tr>
<tr>
<td id="formtd">Passport</td>
<td id="formio"><input type="file" name="image" /></td>
</tr>
<tr>
<td id="formtd">Name of Institution</td>
<td id="formio"><input type="text" name="institution" /></td>
</tr>
<tr>
<td id="formtd">Course of Study</td>
<td id="formio"><input type="text" name="course" /></td>
</tr>
<tr>
<td id="formtd">Level of Study</td>
<td id="formio"><input type="text" name="level" /></td>
</tr>
<tr>
<tr>
<td id="formtd">Registration Number</td>
<td id="formio"><input type="text" name="regnum" /></td>
</tr>
<tr>
<td id="formtd">User Name</td>
<td id="formio"><input type="text" name="username" /></td>
</tr>
<tr>
<td id="formtd">Password</td>
<td id="formio"><input type="password" name="password" /></td>
</tr>
</table>
</form>
</div>
</div>
<div id="container">

</div>
</div>
<div id="footer"></div>
</body>
</html>