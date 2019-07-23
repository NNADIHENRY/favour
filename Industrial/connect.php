<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'siwes';
 //$result=mysql_connect($server, $username,  $password) or die("Could not connect");
// mysql_select_db($database) or die("Could not select the DB");
$con = new mysqli($server,$username,$password,$database);
if($con->connect_error){
	trigger_error('Database connection failed:'. $con->connect_error, E_USER_ERROR);
}


?>