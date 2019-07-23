<?php 
 
 
include ('connection.php');


class connectUser extends connection{
	
	private $name;
	private $department;
	private $regnumber;
	private $phonenumber;
	
	
	
	
	public function register($M,$B,$C,$E){
		
		
		$this->name=$M;
		$this->department=$B;
		$this->regnumber=$C;
		$this->phonenumber=$E;
		
		
		
		
		
		$this->Connect();
		
		
		$sql="INSERT INTO student(name,department,regnumber,phonenumber) VALUES ('$this->name','$this->department','$this-regnumber','$this->phonenumber');"; 
		
		$this->Connect()->query(sql);
		
		
		
	}
	
}
	
	
	
	
$MrX=$_POST['name'];
$Bube=$_POST['department'];
$Charity=$_POST['regnumber']; 
$Emma=$_POST['phonenumber'];




$transport=new connectUser();

$transport->register($MrX,$Bube,$Charity,$Emma);





?>