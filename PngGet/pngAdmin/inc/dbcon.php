<?php
class Connection{

    private $servername="localhost";
    private $serverusername="root";
    private $serverpassword="";
    private $database="pngget";

    public function Connect(){

        $con=new mysqli($this->servername,$this->serverusername,$this->serverpassword,$this->database);



     if($con){

    return $con;
     }else{
         echo "connection failed";
     }

    }
}


$test=new Connection();
$test->Connect();



?>
