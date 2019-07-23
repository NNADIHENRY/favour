<?php
include "dbcon.php";
class upload extends Connection(){




}

    $pic = $_FILES['picture'];
    $pictempname = $_FILES['picture']['tmp_name'];
    $picname = $_FILES['picture']['name'];
    $picsize = $_FILES['picture']['size'];
    $picerror = $_FILES['picture']['error'];
    $pictype = $_FILES['picture']['type'];

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

    //check if the extension exists in  the array
    if(in_array($relformat, $allowedformats)){
        $destination = "../uploads/".$picnameonly.".".$relformat;
        move_uploaded_file($pictempname, $destination);
    }
    else{
        echo 'sorry format not supported';
    }
    $thepicture = $picnameonly.".".$relformat;

}


$newPost = new postContents();
$newPost->post($thepicture);

 ?>
