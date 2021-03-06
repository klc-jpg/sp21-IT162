<?php include "includes/portal-config.php" ?>
<!DOCTYPE html>
<html lang=en>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/fc8e666ffc.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/nav.css"/>
<link rel="stylesheet" type="text/css" href="css/portal.css"/>
<link rel="stylesheet" type="text/css" href="css/form.css"/>

</head>

<body>
<!--WRAPPER START -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i><span class="first"> Kelly Chapman's SCC IT162 Portal</span></a></h1>
  <nav>  
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>
     <!-- <li><a href="index.php">Home</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Kelly</a></li> -->
      <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul> 
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
   <h2 class="pageID"><?=$pageID?></h2>
