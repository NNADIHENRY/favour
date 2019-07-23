<?php

include "connection.php";


/**
* 
*/
class information extends Connection

{
	
	public function collectinfo()
	{
		
		$sql="SELECT * FROM studentslist ;";


		$receive=$this->Connect()->query($sql);



		while($collect=$receive->fetch_assoc()){

			echo'

			<tr>
<td>'.$collect['id'].'</td>

<td>'.$collect['Name'].'</td>
<td>'.$collect['Department'].'</td>
<td>'.$collect['Regno'].'</td>
<td>'.$collect['Gender'].'</td>
<td>'.$collect['Phonenumber'].'</td>

</tr>









			';
		}
	}
}


















?>