<?php


include "dbcon.php";

class Contact extends Connection{

  private $fname;
  private $lname;
  private $mail;
  private $password;


  public function Contactus($f,$l,$m,$p){
    $this->fname=$f;
    $this->lname=$l;
    $this->mail=$m;
    $this->password=$p;




$sql="INSERT INTO admins(firstname,lastname,email,password,adminpriviledge) VALUES('$this->fname','$this->lname','$this->mail','$this->password','false');";


  $sendone=$this->Connect()->query($sql);

  if($sendone){

    echo"<span style='color:green;'>Co-Administrator Added Successfully</span>";
    echo'
<script>
setTimeout(function(){
      location.assign("addAdmin.html");
},1000);



</script>
    ';
  }else{
echo"Co-Adminstrator Not Added Successfully";

}
  }


}

$name=$_POST['firstname'];
$lname=$_POST['lastname'];
$mailing=$_POST['email'];
$password=$_POST['password'];
$hashpword=md$password;



$test=new Contact();

if($_POST['password'] != $_POST['comfirmpassword']){
echo'<span style="color:red;">Oops! password did not match</span>';
}
else{



  $test->Contactus($name,$lname,$mailing,$password);


//  header("Location:../login.html");
//  echo "message sent successfully";

}


 ?>
