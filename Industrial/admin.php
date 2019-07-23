<?php
session_start();
include 'header.php';
include 'connect.php';
if (isset($_POST['search'])){
	if($_POST['username']==''){
		echo 'please fill in the company code';
	}
	elseif($_POST['password']==''){
		echo 'please fill in the company name';
	}
	else{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$sql2 = "SELECT * FROM itform where username='".$user."' and password='".$pass."'";
		
		$rs2 =$con->query($sql2);
		 if($rs2->num_rows == 0){
			 echo 'Error: you supllied invalid username or password';
		 }
	else{
	
	echo '<form method="post" action="edit.php" style=" margin-bottom:30px;" >
	<table style="width:100%">
	';
	while($row =$rs2->fetch_assoc())
							{
								if($row['username']==$user and $row['password']==$pass){
									$_SESSION['username']=$user;
									$_SESSION['password']=$pass;
								echo '<div style="text-align:center;" > 
								<img src="'.$row['passport'].'" width="150px" height="150px"/>
								<h2 style="color:green;">'.$row['surname'].'  '.$row['firstname'].'  '.$row['midname'].'
								<hr/>
								</div>';
								echo '<tr>
								<td> Surname</td>
								<td><input type="text" name="surname" value="'.$row['surname'].'"/></td>
								<td>First Name</td>
								<td><input type="text" name="firstname" value="'.$row['firstname'].'"/></td>
								<td>Middle Name</td>
								<td><input type="text" name="midname" value="'.$row['midname'].'"/></td>
								</tr>
								<tr>
								<td>Sex</td>
								<td><input type="text" name="sex" value="'.$row['sex'].'"/></td>
								<td>State</td>
								<td><input type="text" name="state" value="'.$row['state'].'"/></td>
								<td>Phone</td>
								<td><input type="text" name="phone" value="'.$row['phone'].'"/></td>
								</tr>
								<tr>
								<td>Institution</td>
								<td><input type="text" name="institution" value="'.$row['institution'].'"/></td>
								<td>Placement Number</td>
								<td><input type="text" name="pnumber" value="'.$row['pnumber'].'"/></td>
								<td>Organization Name</td>
								<td><input type="text" name="company" value="'.$row['company'].'"/></td>
								</tr>
								<tr>
								<td>Bank Name</td>
								<td><input type="text" name="bankname" value="'.$row['bankname'].'"/></td>
								<td>Sort code</td>
								<td><input type="text" name="sortcode" value="'.$row['sortcode'].'"/></td>
								<td>Payment status</td>
								<td><input type="text" name="payment_status" value="'.$row['payment_status'].'"/></td>
								</tr>
								<tr>
								<td><input type="submit" name="edit" value="Submit" style=" width:100px;height:25px;"/></td>
								<td><input type="hidden" name="username" value="'.$_SESSION['username'].'"</td>
								<td><input type="hidden" name="password" value="'.$_SESSION['password'].'"</td>
								</tr>
								';
								}
							}
							echo '</table></form>';
		
	}
}
}




if (isset($_POST['login'])){
	if($_POST['username']==''){
		echo 'please fill in the company code';
	}
	elseif($_POST['password']==''){
		echo 'please fill in the company name';
	}
	else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM staffform where username='".$username."' and password='".$password."'";
		$rs =$con->query($sql);
	 if($rs->num_rows == 0){
			 echo 'Error: you supllied invalid username or password';
		 }
	else{
	while($row =$rs->fetch_assoc())
							{
								if($row['username']==$username and $row['password']==$password){
									echo '<div >
									<h2 style=" text-align:center;color:green;">Welcome to the ADMIN portal</h2>
									</div><hr>
									';
									echo '
									<img src="images/training6.jpg" height="200px" width="600px" style="float:right;"/>
									<form method="post" style=" height:200px;margin-bottom:50px;">
									<table>
									<tr>
									<td>Student username</td>
									<td><input type="text" name="username"/>
									</tr>
									<tr>
									<td>Student password</td>
									<td><input type="text" name="password"/>
									</tr>
									<tr>
									<td></td>
									<td><input type="submit" name="search" value="Search"/>
									</tr>
									</table>
									</form>';
								}
							}
	}
	}
}

include 'footer.php';
?>