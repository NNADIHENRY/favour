  

<!DOCTYPE html>
<html>
<head>
<title>reading fromdb </title>
<style type="text/css">

*{
	margin: 0px 0px 0px 0px;

	padding: 0px 0px 0px 0px;
}

#table{
	width: 450px;
	height: 500px;
	background-color: blue;
	margin: auto;
}

table{
	width: 450px;
	color: white;
}
table th{

font-size: 20px;
color: black;

}

 

</style>
</head>

<body>
<div id="table">

<table>
	<tr>
		<th>S/n</th> 
		<th>Name</th>
		<th>Department</th>
		<th>Regno</th>
		<th>Gender</th>
		<th>Phonenumber</th>
<?php

include "practiceread.php";

$send=new information();
$send->collectinfo();





?>

</tr>
</table>




</div>











</body>
</html>



















