<?php
$getmessage=$_GET['message'];

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Ikwegbu George Chinedu Iheanyichukwu">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="description" content="PngGet stands for Portable Network Graphics Get, where PNG images can be downloaded by users for easy integration into their work. This has so many categories, ranging from nature, food, meal, cars, aeroplanes, ships, keke, houses, buildings, electronics, cloths, etc.">
    <meta name="keywords" content="We provide images without backgrounds so as to help users who doesn\'t know how remove image backgrounds with any Graphics software. This has so many categories, ranging from nature, food, meal, cars, aeroplanes, ships, keke, houses, buildings, electronics, cloths, etc.">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/favicon.jpg" size="16*16" type="image/png">
    <title>PngGet -Admin Login</title>
    <style media="screen">
      body{
        background-color: black;
      }
    </style>

    <script src="../js/jquery-1.10.2.min.js"></script>
<script>

$(document).ready(function(){
  $("form").on('submit',(function(e){
    e.preventDefault();
    $.ajax({
      url:"inc/login.php", //url to which the request is sent
      type:"POST",                  //type of request to be sent
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data)
      {
        $("#form-message").html(data);
      }
    });
}));
});

</script>



  </head>
  <body>
    <div class="container-fluid">
      <div class="login-page">
        <div class="login-header">

          <?php
          $getmessage=$_GET['message'];
          if(isset($_GET['message'])){

            echo'<h4 style="color:red;">'.$_GET['message'].'</h4>';
          }

           ?>
          <h2>Administrator Portal</h2>
          <i style="font-size:15px;">please enter your detials to login...</i>
        </div><hr>
        <form class="form-responsive login-form" action="inc/login.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="email..." required value="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password..." required name="password" value="">
          </div>
          <div class="action">
            <p id="form-message"></p>
            <p><a href="#">Forgot password?</a></p>
          </div>
          <div class="form-group">

          <!--Ajax code to pour out here-->



            <input type="submit" name="" class=" form-control" value="Login">
          </div>
        </form>
      </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-1.10.2.min.js"charset="utf-8"></script>
  <script src="../js/wow.min.js"charset="utf-8"></script>
  <script src="../js/ajax.js"charset="utf-8"></script>
  <script src="../js/George.js"charset="utf-8"></script>
  <script>
    new WOW().init();
  </script>
</html>
