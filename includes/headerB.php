<?php include "includes/big-config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$title?></title>
<script src="https://use.fontawesome.com/fc8e666ffc.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/topNav.css"/>
<link rel="stylesheet" type="text/css" href="css/big.css"/>
<link rel="stylesheet" type="text/css" href="css/big-form.css"/>
</head>

<body>
  <main class="wrapper">
  <header><img src="assets/banner2.png" alt="banner" class="bkrnd">
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i><span class="first"> Kelly Chapman's Web Dev Basics</span></a></h1>
<nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="../index.php"><span><i class="fa fa-fw fa-arrow-circle-o-left" aria-hidden="true"></i> Home </span></a></li>
      <?=bigLinks1($nav1)?>
      <!--<li><a class="selected" href="index.php">Big</a></li>
      <li><a href="flexbox.php">Flexbox</a></li>
      <li><a href="galleries.php">Galleries</a></li>
      <li><a href="shoppingcart1.php">Shopping Cart1</a></li>
      <li><a href="mobile-responsive.php">Responsive vs. Mobile</a></li>
      <li><a href="webcam.php">Webcam</a></li>-->
      <div class="dropdown">
      <li><a href="#"><span class="dropbtn">Google<i class="fa fa-fw fa-chevron-down"></i></span></a>
        <ul class="dropdown-content">
        <?=bigLinks2($nav2)?>
           <!-- <li><a href="calendar2.php">Calendar</a></li>
            <li><a href="map.php"> Map</a></li>
            <li><a href="youtube.php">YouTube</a></li>-->
        </ul>
      </li>
  </div>
       <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul> 
  </nav>
</header>
<!-- START LEFT COL -->
<section>
   <h2 class="pageID"><?=$pageID?></h2>