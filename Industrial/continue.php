<?php
include 'header.php';
include 'connect.php';

if(isset($_POST['submit'])){
	
	if($_POST['code']==''){
		echo 'please fill in the company code';
	}
	elseif($_POST['name']==''){
		echo 'please fill in the company name';
	}
	elseif($_POST['state']==''){
		echo 'please fill in the state';
	}
	elseif($_POST['address']==""){
		echo 'please fill in the address';
	}
	elseif($_POST['phone']==""){
		echo 'please fill in your phone number';
	}
	elseif($_POST['email']==''){
		echo 'please fill in the email';
	}
	else{
		$code = $_POST['code'];
		$name = $_POST['name'];
		$state = $_POST['state'];
		$address =$_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		
		$query= "INSERT INTO organization(code,name,state,address,phone,email) VALUES('$code','$name','$state','$address','$phone','$email')";
		$result =$con->query($query) or die("Could not perform your request");
	if($result){
		header("Location:index.php");
	}
		
	}
}


echo '
<div><h2 style=" text-align:center;color:green;">Fill correctly and completely the organization form</h2></div>
<div style="width:600px;height:250px;background:blue;float:right;">
<img src="images/Industrial13.jpg" width="100%" height="100%"/>
</div>
';

echo '<div style="width:300px;">
<form method="post" >
<table>
<tr>
<td id="formtd">Code</td>
<td id="formio"><input type="text" name="code" /></td>
</tr>
<tr>
<td id="formtd">Name of company</td>
<td id="formio"><input type="text" name="name" /></td>
</tr>
<tr>
<td id="formtd">State</td>
<td id="formio"><input type="text" name="state" /></td>
</tr>
<tr>
<td id="formtd">Address</td>
<td id="formio"><input type="text" name="address" /></td>
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
<td id="formtd"></td>
<td id="formio"><input type="submit" name="submit" value="Submit" style="width:170px;height:25px;" /></td>
</tr>

</table>
</form>
</div>';



include 'footer.php';
?>