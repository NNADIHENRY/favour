<?php
session_start();
include 'header.php';
include 'connect.php';
if(isset($_POST['send'])){
	if($_POST['name']==''){
		echo '<b style="color:red;">please enter your name</b>';
	}
	elseif($_POST['phone']==''){
		echo '<b style="color:red;">please enter your phone number</b>';
	}
	elseif($_POST['complaint']==''){
		echo '<b style="color:red;">please type your complaint or recommendation</b>';
	}
	else{
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$complain = $_POST['complaint'];
		$query = "INSERT INTO complain(name,phone,complain) VALUES('$name','$phone','$complain')";
	$result =$con->query($query) or die("Could not perform your request");
	if($result){
		echo '<script>alert("complaint/recommendation sent successfully");</script>';
	}
	else{
		echo 'registration failed';
	}
	}
	
}

echo '<div style=" width:75%;margin:auto;">
<p style="color:blue;">Please contact us with the follwing numbers:</p>

08065456543<br/>
08134354654<br/>
09076545432

<form action="" method="post" id="myform" enctype="multipart/form-data" style="
padding:0px;margin:10px;" >
<table >
<tr >
<td id="formtd2">Name</td>
<td id="formtd"><input type="text" id="formio" name="name"/></td>
</tr>
<tr>
<td id="formtd2">Phone Number</td>
<td id="formtd"><input type="text" id="formio" name="phone" /></td>
</tr>
<tr>
<td id="formtd2">Complaint/<br />Recommandation</td>
<td id="formtd"><textarea name="complaint" id="formio" style="height:200px;" ></textarea> </td>
</tr>
<tr>
<td id="formtd2"></td>
<td id="formtd"><input type="submit" value="Send" name="send" id="formio" style="width:30%;"/></td>
</tr>
</table>
</form>

</div>';
include 'footer.php';
?>