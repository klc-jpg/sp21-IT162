<?php
/*
 portal-config.php

 Used to store all of our IT162 configuration information
*/

//echo basename($_SERVER['PHP_SELF']);
//die;





//prevents data from being sent early

ob_start();

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
 
//die;


switch(THIS_PAGE) {

    case "index.php":
        $title = "Kelly's IT162 Title Page";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;

    case "contactme.php":
        $title = "Contact Kelly";
        $logo = 'fa-address-card';
        $pageID = 'Contact';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $pageID = 'Welcome';

    }


    $nav1['index.php'] = "Home";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart/Layout";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Kelly";




    //create function to generate links with current page highlighted

   /* <li><a href="index.php" class="selected">Home</a></li>
    <li><a href="big/index.php">Big</a></li>
    <li><a href="aia.php">AIA</a></li>
    <li><a href="flowchart.php">Flowchart/Layout</a></li>
    <li><a href="fp/index.php">Final Project</a></li>
    <li><a href="contactme.php">Contact Kelly</a></li> --> */

    function makeLinks($nav1) {

            $myReturn = '';
            foreach($nav1 as $url => $text){

                if($url == THIS_PAGE) {
                    $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";

                }else{
                    $myReturn .= "<li><a href=\"$url\">$text</a></li>";
                }

              

            }

            return $myReturn;
    }

?>