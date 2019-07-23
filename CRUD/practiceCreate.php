<?php
include "connection.php";

/**
* 
*/
class Create extends Connection{
	private $Name;
	private $Department;
	private $Regno;
	private $Gender;
	private $Phonenumber;


	
	public function createIt($N,$D,$R,$G,$P){

		$this->Name=$N;
		$this->Department=$D;
		$this->Regno=$R;
		$this->Gender=$G;
		$this->Phonenumber=$P;



		$sql="INSERT INTO studentslist(Name,Department,Regno,Gender,Phonenumber)  VALUES ('$this->Name','$this->Department','$this->Regno','$this->Gender','	$this->Phonenumber');";
		
		$this->Connect()->query($sql);
	
	}
}



$thename=$_POST['name'];

$thedept=$_POST['department'];

$thereg=$_POST['regno'];

$thegen=$_POST['gender'];

$thephone=$_POST['phonenumber'];



$favour=new Create();
$favour->createIt($thename,$thedept,$thereg,$thegen,$thephone);











?>