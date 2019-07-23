<?php

session_start();
include 'header.php';
include 'connect.php';

$sql = "SELECT * FROM itform where username='".$username."' and password='".$password."'";
		$rs =$con->query($sql);
	while($row =$rs->fetch_assoc())
							{
							}

include 'footer.php';

?>