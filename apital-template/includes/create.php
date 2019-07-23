<?php
//echo 'the create is seriously working'

SESSION_START();
include "dbcon.php";

class create extends Connection{
    private $usern;
    private $pword;
    private $bizname;
    private $n_biz;
    private $rc_no;
    private $why_invest;
    private $mail;
    private $pee;
    private $facebook;
    private $instagram;
    private $twiter;
    private $person_n;
    private $number;
    private $p_mail;

    public function createuser($user,$pass,$bizn,$n,$r,$w,$m,$up,$f,$i,$t,$p,$no,$ma){
        $this->usern=$user;
        $this->pword=$pass;
        $this->bizname=$bizn;
        $this->n_biz=$n;
        $this->rc_no=$r;
        $this->why_invest=$w;
        $this->mail=$m;
        $this->pee=$up;
        $this->facebook=$f;
        $this->instagram=$i;
        $this->twiter=$t;
        $this->person_n=$p;
        $this->number=$no;
        $this->p_mail=$ma;

if(!isset($_POST["username"])) {

echo $message = " username field is required";


}



       $favour="INSERT INTO users (username,password,b_name,nature,rc_bn,invest,email,upload,social_f,social_i,social_t,p_name,phonenumber,p_email)VALUES
       ('$this->usern','$this->pword','$this->bizname','$this->n_biz','$this->rc_no','$this->why_invest','$this->mail','$this->pee',
       '$this->facebook','$this->instagram','$this->twiter','$this->person_n','$this->number','$this->p_mail');";
       
       
//this checks if the username already exist
        $sql="SELECT * FROM users WHERE username='$this->usern';";
           $sendnow=$this->Connect()->query($sql);

//check if email already exist
        $sqlone="SELECT * FROM users WHERE email='$this->mail';";
           $sendone=$this->Connect()->query($sqlone);

           


           if($result=$sendnow->fetch_assoc()){

               echo"username already exist";
           }

           else if($resultone=$sendone->fetch_assoc()){
              echo 'email already exist';
           }

           else{
               $favourme=$this->Connect()->query($favour);
               

            $response['error']="false";
            $response['messsage']="user created successfully";

         //echo  /*json_encode*/("$response");

           //header("Location:../login.html");

          echo' <script>

          window.location.href="../login.html";


           </script>

           ';

}





    }
}


    $pic = $_FILES['upload'];

    $pictempname = $_FILES['upload']['tmp_name'];
    $picname = $_FILES['upload']['name'];
    $picsize = $_FILES['upload']['size'];
    $picerror = $_FILES['upload']['error'];
    $pictype = $_FILES['upload']['type'];

    //split the picture name and the file extension using "."
    $picformat = explode('.',$picname);

    $onlypicname = $picformat['0'];

    //remove every white space from the picture name
    $picnameonly = str_replace(' ', '', $onlypicname );
    preg_replace('/\s/', '', $picnameonly);

    //convert the picture extension to lowercase
    $relformat = strtolower(end($picformat));

    //create an array containing the allowed formats
    $allowedformats = array('jpg','png','jpeg');

    //to give the pic a unique name
    $picnewname = uniqid('',true).".".$relformat;

    //check if the extension exists in  the array
    if(in_array($relformat, $allowedformats)){
//$destination = "../uploads/".$picnameonly.".".$relformat;
$destination = "../uploads/".$picnewname;
        move_uploaded_file($pictempname, $destination);
    }
    else{
        echo 'sorry format not supported';
    }




//$upload=$picnameonly.".".$relformat;
$usern=$_POST['username'];
$passw=$_POST['password'];
$biz=$_POST['bizname'];
$nature=$_POST['natureof'];
$bn=$_POST['bn_no'];
$should=$_POST['why'];
$email=$_POST['email'];
$picture=$picnewname;
$fb=$_POST['facebook'];
$inst=$_POST['instagram'];
$twit=$_POST['twitter'];
$person=$_POST['person_n'];
$phonen=$_POST['phone'];
$pmail=$_POST['p_mail'];

$test= new create();
$test->createuser($usern,$passw,$biz,$nature,$bn,$should,$email,$picture,$fb,$inst,$twit,$person,$phonen,$pmail);




?>
