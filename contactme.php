<!DOCTYPE html>
<html>
<head>
<title>Contact Me</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" type="text/css" href="css/nav.css"/>
<link rel="stylesheet" type="text/css" href="css/portal.css"/>
<link rel="stylesheet" type="text/css" href="css/form.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>

<header role="banner">
  <h1><a href="contactme.php"><i class="logo fa fa-home"></i><span class="first"> Contact</span></a></h1> 
  <nav>  
    <ul class="topnav" id="myTopnav">
      <li><a href="#index.php">Home</a></li>
      <li><a href="#big/index.php">Big</a></li>
      <li><a href="#aia.php">AIA</a></li>
      <li><a href="#flowchart.php">Flowchart/Layout</a></li>
      <li><a href="#fp/index.php">Final Project</a></li>
      <li><a href="#contactme.php" class="selected">Contact Kelly</a></li> 
      <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul> 
  </nav>
  <main role="main">
    </header><h3>Contact Kelly</h3></header>
    <p>""</p>
    <div class="indent">
         <ul>
            <li><b>loadContact('simple.php');</b></li>
        </ul>
  </div>
  <?php include "includes/contact_include.php"; #site keys & code here

        $toAddress = "kelly.chapman@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Kelly Chapman"; //place your client's name here
        $website = "it162.kellychapman.xyz";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
    ?>
        </main>
    <footer>
      <small>&copy; 2013-<?=date('Y')?>Kelly Chapman, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
</body>
</html>

