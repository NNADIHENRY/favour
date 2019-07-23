<?php
session_start();
include 'header.php';
include 'connect.php';


if (isset($_POST['submit'])){
	$sql = "SELECT * FROM itform where username='".$_SESSION['username']."' and password='".$_SESSION['password']."'";
	$rs =$con->query($sql);
	
	echo '<form method="post" action="edit.php" style=" margin-bottom:30px;" >
	<table style="width:100%">
	';
	while($row =$rs->fetch_assoc())
							{
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
								</tr>
								<tr>
								<td><input type="submit" name="edit" value="Submit" style=" width:100px;height:25px;"/></td>
								<td><input type="hidden" name="username" value="'.$_SESSION['username'].'"</td>
								<td><input type="hidden" name="password" value="'.$_SESSION['password'].'"</td>
								</tr>
								';
								
							}
							echo '</table></form>';
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
		$sql = "SELECT * FROM itform where username='".$username."' and password='".$password."'";
		$rs =$con->query($sql);
	 if($rs->num_rows == 0){
			 echo 'Error: you supllied invalid username or password';
		 }
	else{
	while($row =$rs->fetch_assoc())
							{
								if($row['username']==$username and $row['password']==$password){
									$_SESSION['username']=$username;
									$_SESSION['password']=$password;
									echo '<div style="text-align:center;"> 
									<img src="'.$row['passport'].'" width="150px" height="150px"/ >
									<h2 style="color:green;">'.$row['surname'].' '.$row['firstname'].' '.$row['midname'].'</h2>
									
									</div>';
								
								echo '<table style="width:100%; margin-bottom:50px;">
								<th style="color:yellow;background:black;">Surname</th>
								<th style="color:yellow;background:black;">First Name</th>
								<th style="color:yellow;background:black;">Middle Name</th>
								<th style="color:yellow;background:black;">Sex</th>
								<th style="color:yellow;background:black;">State</th>
								<th style="color:yellow;background:black;">Phone</th>
								<th style="color:yellow;background:black;">Institution</th>
								<th style="color:yellow;background:black;" >Placement Number</th>
								<th style="color:yellow;background:black;">Organization</th>
								<th style="color:yellow;background:black;">Bank</th>
								<th style="color:yellow;background:black;">Sort code</th>
								<th style="color:yellow;background:black;">Payment</th>
								<tr>
								<td>'.$row['surname'].'</td>
								<td>'.$row['firstname'].'</td>
								<td>'.$row['midname'].'</td>
								<td>'.$row['sex'].'</td>
								<td>'.$row['state'].'</td>
								<td>'.$row['phone'].'</td>
								<td>'.$row['institution'].'</td>
								<td>'.$row['pnumber'].'</td>
								<td>'.$row['company'].'</td>
								<td>'.$row['bankname'].'</td>
								<td>'.$row['sortcode'].'</td>
								<td>'.$row['payment_status'].'</td>
								</tr>
								<tr>
								<td><form method="post"><input type="submit" name="submit" value="Edit" style="width:100px;height:25px;"/></form></td>
								</tr>
								 </table>';
								
								}
							}
		
	}
	}
	
}
include 'footer.php';
?>