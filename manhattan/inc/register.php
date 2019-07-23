<?php


include "dbcon.php";

class Contact extends Connection{

  private $fname;
  private $password;
  private $mail;
  private $tech;


  public function Contactus($f,$p,$m,$t){
    $this->fname=$f;
    $this->password=$p;
    $this->mail=$m;
    $this->tech=$t;
    
    




$sql="INSERT INTO admins(fullname,password,email,techname) VALUES('$this->fname','$this->password','$this->mail','$this->tech=$t');";


  $sendone=$this->Connect()->query($sql);

  if($sendone){

    echo"user Added Successfully";
   
    
  }else{
echo"Co-Adminstrator Not Added Successfully";

}
  }


}

$name=$_POST['fullname'];
$password=$_POST['password'];
$mailing=$_POST['email'];
$tech=$_POST['techname'];






$test=new Contact();
$test->Contactus($name,$password,$mailing,$tech);


}


 ?>
