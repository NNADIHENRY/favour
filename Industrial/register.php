<?php

include 'connect.php';
if(isset($_POST['submit'])){
	
	if($_POST['surname']==''){
		echo 'please fill in your surname';
	}
	elseif($_POST['firstname']==''){
		echo 'please fill in your first name';
	}
	elseif($_POST['midname']==''){
		echo 'please fill in your first name';
	}
	elseif($_POST['dob']==""){
		echo 'please fill in your date of birth';
	}
	elseif($_POST['state']==""){
		echo 'please fill in your state';
	}
	elseif($_POST['nationality']==''){
		echo 'please fill in your nationality';
	}
	elseif($_POST['phone']==''){
		echo 'please fill in your phone number';
	}
	elseif($_POST['email']==''){
		echo 'please fill in your email adress';
	}
	elseif($_POST['contact']==''){
		echo 'please fill in your contact address';
	}
	elseif($_POST['institution']==''){
		echo 'please enter your school';
	}
	elseif($_POST['course']==''){
		echo 'please enter your course of study';
	}
	elseif($_POST['level']==''){
		echo 'please enter your level';
	}
	elseif($_POST['regnum']==''){
		echo 'please enter your regnum';
	}
	elseif($_POST['year']==''){
		echo 'please enter the year of IT';
	}
	elseif($_POST['secure']==''){
		echo 'please tell us if you have secured a placement';
	}
	elseif($_POST['pstate']==''){
		echo 'please enter your placement state';
	}
	elseif($_POST['pnum']==''){
		echo 'please enter your placement number';
	}
	elseif($_POST['compname']==''){
		echo 'please enter your company name';
	}
	elseif($_POST['period']==''){
		echo 'please enter the period';
	}
	elseif($_POST['duration']==''){
		echo 'please enter the duration';
	}
	elseif($_POST['address']==''){
		echo 'please enter the address of your company';
	}
	elseif($_POST['compphone']==''){
		echo 'please enter your company phone number';
	}
	elseif($_POST['compemail']==''){
		echo 'please enter your company email';
	}
	elseif($_POST['bankname']==''){
		echo 'please enter your bank name';
	}
	elseif($_POST['accountnum']==''){
		echo 'please enter your account number';
	}
	elseif($_POST['sortcode']==''){
		echo 'please enter bank sort code';
	}
	elseif($_POST['pstatus']==''){
		echo 'please enter your payment status';
	}
	elseif($_POST['username']==''){
		echo 'please enter your username';
	}
	elseif($_POST['password']==''){
		echo 'please enter your password';
	}
	else{
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$midname = $_POST['midname'];
	$sex = $_POST['sex'];
	$dob = $_POST['dob'];
	$state = $_POST['state'];
	$nationality = $_POST['nationality'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['contact'];
	$institution = $_POST['institution'];
	$course = $_POST['course'];
	$level = $_POST['level'];
	$regnum = $_POST['regnum'];
	$ityear = $_POST['year'];
	$secure = $_POST['secure'];
	$pstate = $_POST['pstate'];
	$pnum = $_POST['pnum'];
	$compname = $_POST['compname'];
	$period = $_POST['period'];
	$duration = $_POST['duration'];
	$compaddress = $_POST['address'];
	$compphone = $_POST['compphone'];
	$compemail = $_POST['compemail'];
	$bankname = $_POST['bankname'];
	$accountnum = $_POST['accountnum'];
	$sortcode = $_POST['sortcode'];
	$pstatus = $_POST['pstatus'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$contact = $_POST['contact'];
	
	$pdfDir="uploaded/";
	$pdfThumb="pdfimage/";
//if (isset($_POST['submit'])){
	if(is_uploaded_file($_FILES['image']['tmp_name'])){
		$filename=$_FILES['image']['name'];
		$filesize=$_FILES['image']['size'];
		$filetype=$_FILES['image']['type'];
		move_uploaded_file($_FILES['image']['tmp_name'],$pdfDir.$_FILES['image']['name']);
		$imagepath=$pdfDir.$_FILES['image']['name'];
		 //echo "<p><a href=\"$pdffilePath\"><img src=\"pdfimage/$thumb\" alt=\"\" /></a></p>";
		 
//}
	
	$query = "INSERT INTO itform(surname,firstname,midname,sex,dob,state,nationality,phone,email,address,passport,course,level,regnum,year,secured,pstate,pnumber,company,period,duration,compaddress,compphone,compemail,bankname,accountnum,sortcode,payment_status,username,password,institution
) VALUES('$surname','$firstname','$midname','$sex','$dob','$state','$nationality','$phone','$email','$address','$imagepath','$course','$level','$regnum','$ityear','$secure','$pstate','$pnum','$compname','$period','$duration','$compaddress','$compphone','$compemail','$bankname','$accountnum','$sortcode','$pstatus','$username','$password','$institution')";
	$result =$con->query($query) or die("Could not perform your request");
	if($result){
		echo '<h2 style="color:green;">Registration successful</h2><br/><h3>Your user name is <span style="color:red;">'.$_POST['username'].'</span>';
		echo '<br/><br/> click <a id="here" href="continue.php"> Here</a> to continue';
	}
	else{
		echo 'registration failed';
	}
}
}
}
?>
