<?php
session_start();
if(isset($_SESSION['firstname'])){

}else{
  header("Location:login.ht?message=please%20login%20first");
}


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
    <title>PngGet -Dashboard</title>
  </head>
  <body>

    <!-- This is for the horizontal navigation bar starts here -->
    <nav class="nav-bar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand"><span class="glyphicon glyphicon-camera"></span> PngGet - Administrator</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#georgeNavbar">
             <i class="fa fa-2x fa-angle-double-down wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-iteration="infinite"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="georgeNavbar">
          <ul class="nav navbar-nav navbar-left hidden-lg">
            <li class="active"><a href="index.html"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
            <li><a href="uploads.html"><span class="glyphicon glyphicon-picture"></span> Review Uploads</a></li>
            <li><a href="email.html"><span class="glyphicon glyphicon-envelope"></span> Email</a></li>
            <li><a href="chat.html"><span class="fa fa-comment"></span> Chat</a></li>
            <li><a href="addadmin.html"><span class="fa fa-user-plus"></span> Add Co-Administrator</a></li>
            <li><a href="edit.html"><span class="glyphicon glyphicon-cog"></span> Edit Profile</a></li>
            <li><a href="../_inc/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:;"><img src="../img/user.png" alt="">  George </a></li>
            <li> <a href="javascript:;"></a> </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- This is for the horizontal navigation bar ends here -->

    <div class="container-fluid">
      <!-- This is the start of CONTENT section -->
      <div class="CONTENT">
        <!-- This is for the vertical navigation bar starts here -->
        <div class="sideNav hidden-xs">
          <ul>
            <li><span class="glyphicon glyphicon-dashboard active" data-wow-iteration="infinite"></span><a href="index.html">  Dashboard</a></li>
            <li><span class="glyphicon glyphicon-picture wow tada" data-wow-iteration="infinite"></span><a href="uploads.html">  Review Uploads</a></li>
            <li><span class="glyphicon glyphicon-envelope wow flipInX" data-wow-iteration="infinite"></span><a href="email.html">  Email <b>5</b></a></li>
            <li><span class="fa fa-comment wow rubberBand" data-wow-iteration="infinite"></span><a href="chat.html">  Chat <b>20</b></a></li>
            <li><span class="fa fa-user-plus"></span> <a href="addAdmin.html">Add Co-Admin</a></li>
            <li><span class="glyphicon glyphicon-cog wow rotateIn" data-wow-iteration="infinite"></span><a href="edit.html">  Edit Profile</a></li>
            <li><span class="glyphicon glyphicon-off wow pulse" data-wow-iteration="infinite"></span> <a href="inc/logout.php"> Logout</a></li>
            <!-- <li><a href="#"></a></li>
            <li><a href="#"></a></li> -->
          </ul>
        </div>
        <!-- This is for the vertical navigation bar ends here -->

        <!-- This is the section for the maincontent starts here -->
        <div class="mainContent">
          <div class="dashboard">
            <div class="dashboard-header">
              <h2>Dashboard</h2>
              <p>
                <b>Home</b> <span class="fa fa-caret-right"></span>
                <i>Dashboard</i>
              </p>
            </div>
            <div class="dashboard-content">
              <!-- backgroundcolor will be white -->
              <div class="box totalUser">
                <h4>Total Users</h4>
                <p>17,000</p>
              </div>
              <div class="box activeuser">
                <h4>Active Users</h4>
                <p>14,000</p>
              </div>
              <div class="box totalAdmin">
                <h4>Total Administrator</h4>
                <p>300</p>
              </div>
              <div class="box totalDownload">
                <h4>Total Download</h4>
                <p>14,000,000</p>
              </div>
              <div class="box totalPic">
                <h4>Total Picture</h4>
                <p>78,000,000</p>
              </div>
              <div class="box totalLikes">
                <h4>Total Likes</h4>
                <p>50,000,000</p>
              </div>
              <div class="box totalApprove">
                <h4>Total Shares</h4>
                <p>62,000,000</p>
              </div>
              <div class="box totalDeny">
                <h4>Total Approval</h4>
                <p>78,000,000</p>
              </div>
              <div class="box">
                <h4>Total Denial</h4>
                <p>2,000,000</p>
              </div>

              <div class="space">

              </div>
            </div>
          </div>

          <!-- This is the start for footer section -->
          <!-- <div class="footer navbar-fixed-bottom"> -->
          <div class="footer navbar-fixed-bottom">
        <!-- <div class="footer"> -->
            <p>&copy PngGet.com 2019-<b id="date">2019</b>. All Rights Reserved</p>
          </div>
          <!-- This is the end for footer section -->
        </div>
        <!-- This is the section for the maincontent ends here -->


      </div>
      <!-- This is the end for the CONTENT section -->



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
