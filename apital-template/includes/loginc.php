<?php

include "dbcon.php";

class login extends Connection{

    private $usern;

    private $passw;

    public function loginuser($u,$p){

        $this->usern=$u;

        $this->passw=$p;

        $sql="SELECT * FROM users WHERE username='$this->usern' OR email='$this->usern' AND password='$this->passw';";

        $send=$this->Connect()->query($sql);

        if($readit=$send->fetch_assoc()){
             session_start();
             $_SESSION['id']=$readit['id'];
             $_SESSION['username']=$readit['username'];
             $_SESSION['password']=$readit['password'];
            echo'
            <script>
            window.location.href="../meet-the-team.php";



            </script>
            
            ';
        }
        
else{
    echo"user does not exist";
}

    }
}

$user=$_POST['username'];
$pass=$_POST['password'];

$test=new login();
$test->loginuser($user,$pass);
?>
