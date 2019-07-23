<?php

include "dbcon.php";

class login extends Connection{



    private $email;
    private $pword;

    public function loginuser($e,$p){



        $this->email=$e;
        $this->pword=$p;

        $sql="SELECT * FROM admins WHERE email='$this->email' AND password='$this->pword';";
        //$sqlone="SELECT * FROM admins WHERE;";

        $send=$this->Connect()->query($sql);

        if($result=$send->fetch_assoc()){

          session_start();
          $_SESSION=$result;

          echo'
                     <script>
                     window.location.href="index.php";



                     </script>

                     ';
        }
        else{

          echo'<span style="color:red;"> Oops! details not correct, please check your details </span>';


          echo'
        <script>
        setTimeout(function(){
            location.assign("login.html");
        },5000);


          ';
        }
}

}

$test=new login();

$mail=$_POST['email'];
$pword=$_POST['password'];

$test->loginuser($mail,$pword);
