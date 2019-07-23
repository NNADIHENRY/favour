<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               

class Connection{

private $servername ="localhost";
private $serverusername="root";
private $serverpassword="";
private $databasename="studentdb";

public function Connect(){

$conn=new mysqli($this->servername,$this->serverusername,$this->serverpassword,$this->databasename);


if($conn){
   
    return $conn;
}



}

}


?>