<?php
include "dbcon.php";


class acceptit extends Connection{

private $username;
private $password;









public function accept($usern,$pword){

$this->username=$usern;
$this->password=$pword;



$sql="SELECT * FROM users WHERE username='$this->username'AND password='$this->password';";

$mrx=$this->Connect()->query($sql);

if($result=$mrx->fetch_assoc()){



	session_start();
	$_SESSION['id']=$result['id'];
	$_SESSION['fullname']=$result['Fullname'];


	$_SESSION['firstname']=$result['username'];
	$_SESSION['pword']=$result['password'];
	$_SESSION['email']=$result['email'];

	$_SESSION['address']=$result['adress'];

	$_SESSION['gender']=$result['gender'];
	$_SESSION['country']=$result['country'];
	$_SESSION['stateus']=$result['statues'];




	header("Location:./dashboard.php");

}
else{


	$_SESSION['message']="could not login user";

	hearder("Login:./loginscreen.php");
}

}


}

$theusern=$_POST['username'];

$thepword=$_POST['password'];
$securedpassword=md5($thepword);

$acceptarg=new acceptit();
$acceptarg->accept($theusern,$securedpassword);



?>