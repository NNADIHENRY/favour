<?php
include "connection.php";


/**
* the main class that recieve info and sends to the database 
*/
class sending extends Connection{

	private $Name;
	private $Department;
	private $Regno;
	private $Gender;
	private $Phonenumber;
	



	
	public function registeruser($M,$B,$C,$E,$F){
		$this->Name=$M;
		$this->Department=$B;
		$this->Regno=$C;
		$this->Gender=$E;
		$this->Phonenumber=$F;



		


		$sql ="INSERT INTO studentslist(Name,Department,Regno,Gender,Phonenumber) VALUES('$this->Name','$this->Department','$this->Regno','$this->Gender','$this->Phonenumber');";

		$this->Connect()->query($sql);

	}
}
	


$MrX=$_POST['name'];

$Bube=$_POST['department'];

$Charity=$_POST['regno'];

$Emma=$_POST['gender'];

$Favour=$_POST['phonenumber'];

$transport=new sending();

$transport->registeruser($MrX,$Bube,$Charity,$Emma,$Favour);
?>