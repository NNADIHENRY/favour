<?php
include"dbcon.php";


class createuser extends Connection{
	
	private $fulln;
		private $usern;
			private $pword;
					private $email;
						private $gender;
							private $address;
								private $country;
									private $statues;






									public function newuser($f,$u,$p,$e,$g,$a,$c,$s){


									$this->fulln=$f;
									 $this->usern=$u;
										$this->pword=$p;
											$this->email=$e;
												$this->gender=$g;
													$this->address=$a;
														$this->country=$c;
															$this->statues=$s;


															$sql="INSERT INTO users (Fullname,username,password,email,adress,country,gender,statues) VALUES('$this->fulln','$this->usern','$this->pword','$this->email','$this->gender','$this->address','	$this->country','$this->statues');";

															$send=$this->Connect()->query($sql);

															if($send){
															//echo "user registered successfully";

																session_start();
																//$SESSION['massage']="user created successfully";
																header("Location:./regscreen.php");

														}

														else{
														"registration failed";
													}


								}

}

if($_POST['password']==$_POST['comfirmpassword']){

$fulln=$_POST['fullname'];
$usern=$_POST['username'];
$pword=$_POST['password'];
$email=$_POST['email'];
$gen=$_POST['gender'];
$address=$_POST['address'];
$country=$_POST['country'];
$statues=$_POST['status'];
$thesecuredpword=md5($pword);


$register=new createuser();
$register->newuser($fulln,$usern,$thesecuredpword,$email,$gen,$address,$country,$statues);

}

else{
	echo"password did not match";
}









?>