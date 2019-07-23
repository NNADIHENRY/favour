<?php


class connection{
private $servername = "localhost";
private $serverusername="root";
private $serverpassword="";
private $databasesname="deleser";


public function Connect(){

$con= new mysqli($this->servername, $this->serverusername, $this->serverpassword, $this->databasesname);

if ($con){

    return $con;
}else{
    echo "connection failed";
}

}
}

$check=new connection();
$check->Connect();
?>