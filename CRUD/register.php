<?php

include 'connection.php';

class registering extends Connection{



private $studentname;

private $studentdepartment;

private $studentregno;

private $studentgender;

private $studentphoneno;



public function register($N, $D, $R, $G, $P){


echo $N;

echo $D;

echo $R;

echo $G;

echo $P;







}



}



$Name=$_POST['name'];
$Department=$_POST['department'];
$Regnumber=$_POST['regno'];
$Gender=$_POST['gender'];
$Phonenumber=$_POST['phonenumber'];


$newstudent=new registering();
$newstudent->register($Name,$Department,$Regnumber,$Gender,$Phonenumber);








?>