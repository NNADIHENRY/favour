<?php

include 'connect.php';
if(isset($_POST['edit'])){
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$midname = $_POST['midname'];
	$sex = $_POST['sex'];
	$state = $_POST['state'];
	$phone = $_POST['phone'];
	$institution = $_POST['institution'];
	$pnumber = $_POST['pnumber'];
	$company = $_POST['company'];
	$bankname = $_POST['bankname'];
	$sortcode = $_POST['sortcode'];
	$pstatus = $_POST['payment_status'];
	
	
	$query = "UPDATE itform SET surname='".$surname."',firstname='".$firstname."',midname='".$midname."',sex='".$sex."',phone='".$phone."',institution='".$institution."',pnumber='".$pnumber."',company='".$company."',bankname='".$bankname."',sortcode='".$sortcode."',payment_status='".$pstatus."' where username='".$_POST['username']."' and password='".$_POST['password']."'";
	$result =$con->query($query) or die("Could not perform your request");
	if($result){
		echo '<h2 style="color:green;">Information update successful</h2><br/>';
		echo '<br/><br/> click <a id="here" href="index.php"> Here</a> to continue';
	}
	else{
		echo 'Update failed';
	}
}

?>
