
<!DOCTYPE html>
<html>
<head>
	<title>recieving page</title>


	<style>
	*{
		margin: 0px;
		padding: 0px;
	}


	#table{
		margin: auto;

	width:500px;
	height:600px;
	background-color:blue;
}

table{

	margin-left: 20px;
	width: 300px;
	color: white;
	font-size: 15px;
	margin-top: 10px;
}

#table td{
	margin-left: 10px;


}

	</style>
</head>
<body>
<div id="table">
	

<table>

	<?php

	include 'read.php';
	$sendit=new readinfo();
	$sendit->getData();



	?>
 <!--<th>S/N</th>
	  <th>Name</th>
	  <th>Department</th>
	   <th>Regno</th>
	   <th>Gender</th>
	   <th>Phonenumber</th>-->
</table>




</div>

</body>
</html>








