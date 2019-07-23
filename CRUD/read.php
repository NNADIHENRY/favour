<?php
include 'connection.php';


/**
* 
*/
class readinfo extends Connection{


public function getData(){

	$sql="SELECT * FROM studentslist ;";

		$receive=$this->Connect()->query($sql);

		while($theirData=$receive->fetch_assoc()){

echo'
			<tr>

			<td>'.$theirData['id'].'</td>

			<td>'.$theirData['Name'].'</td>

			<td>'.$theirData['Department'].'</td>

			<td>'.$theirData['Regno'].'</td>

			<td>'.$theirData['Gender'].'</td>

			<td>'.$theirData['Phonenumber'].'</td>




			</tr>


			';



		}



}




}










?>