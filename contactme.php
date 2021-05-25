<!DOCTYPE html>
<html lang=en>
<head>
<title>Contact Kelly</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="preconnect" href="https://use.fontawesome.com">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>
<main class="wrapper">
<header>
  <h1><a href="contactme.php"><i class="fas fa-address-card"></i><span class="first">Kelly Chapman's SCC IT162 Portal</span></a></h1> 
  <nav>  
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">Home</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php" class="selected">Contact Kelly</a></li> 
      <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
    </ul> 
   </nav>   
</header>
  <h2 class="page2">Contact</h2>
      <div id="card">
      <?php include "includes/contact_include3.php"; #site keys & code here
                    "includes/simple.php";
                    "includes/new_feedback.php";

        $toAddress = "kelly.chapman@seattlecentral.edu";  //place your/your client's email address here
        $fromAddress = "noreply@kellychapman.xyz"; 
        $toName = "Kelly"; //place your client's name here
        $website = "Portal/Contact Kelly";  //place NAME of your client's website

        echo loadContact("includes/simple.php","includes/new_feedback.php")#demonstrates a simple contact form
      ?>
  </div>
<!-- START Footer -->
<footer>
   <p><small>&copy; <?=date("Y")?> by Kelly Chapman <a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&doc=https%3A%2F%2Fit162.kellychapman.xyz%2Fcontactme.php" target="_blank"> Check HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fit162.kellychapman.xyz%2Fcontactme.php&profile=css3svg&usermedium=all&warning=1&vextwarning=" target="_blank">Check CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

<!-- JavaScript attributed to W3Schools.com Top Navigation Response Exercise --> 
<script>
/* Toggle between adding and removing the responsive class to topnav when the user clicks icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
    </script>
</body>
</html>

