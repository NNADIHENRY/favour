<?php
include "dbcon.php";


class login extends Connection
{
	private $email;
	private $password;

	public function signup($e,$p)
	{
	$this->email=$e;
	$this->password=$p;

	$sql="SELECT * FROM users );";

	$send=$this->Connect()->query($sql);

	if($result=$send->fetch_assoc()){
		header("Location:../signup.html");
	}
	}
}

$mail=$_POST['email'];
$password=$_POST['password'];

$test=new login ();
$test->signup($mail,$password);
?>